@php
   // echo $order_id;
   // echo "<br>";
    //echo $price;
    $userId = session('user_id');
    $total_price = $price * 100;

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form id="payment-form" action="{{ route('success', $order_id) }}" method="post">
            @csrf
            <!-- Your Razorpay script and other form fields -->
        </form>
    </div>

    <!-- Include Razorpay Checkout script -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            "key": "rzp_test_rVGB7qLPvqr8cQ", // Enter your Razorpay Key ID
            "amount": "{{ $total_price }}", // Amount in paisa
           
            "currency": "INR",
            "description": "Acme Corp",
            "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
            "prefill": {
                "email": "{{$user->email}}",
                "contact": "{{$user->Contact}}"
            },
            "config": {
                "display": {
                    "blocks": {
                        "banks": {
                            "name": "Pay using Axis banks",
                            "instruments": [
                                {
                                    "method": "netbanking",
                                    "banks": ["UTIB"]
                                },
                                {
                                    "method": "card",
                                    "issuers": ["UTIB"]
                                },
                                {
                                    "method": "wallet",
                                    "wallets": ["payzapp"]
                                }
                            ]
                        }
                    },
                    "sequence": ["block.banks"],
                    "preferences": {
                        "show_default_blocks": true
                    }
                }
            },
            // Callback function to handle payment success event
            "handler": function(response) {
                // Submit the form automatically after payment success
                document.getElementById('payment-form').submit();
            }
        };

        // Create a new instance of Razorpay
        var rzp1 = new Razorpay(options);

        // Open the Razorpay checkout form automatically
        rzp1.open();
    </script>
</body>
</html>
