<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable= ['p_name','p_image','cat_id','user_id','is_delete','description','price'];
    protected $primaryKey = 'cat_id';
}
