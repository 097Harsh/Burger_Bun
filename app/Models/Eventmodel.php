<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventmodel extends Model
{
    use HasFactory;
    protected $table = 'book_table';
    protected $fillable= ['b_id','user_id','b_date','starting_time','ending_time','status','booking_name']; 
}
