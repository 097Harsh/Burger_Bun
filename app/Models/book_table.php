<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_table extends Model
{
    use HasFactory;
    protected$table_name ='book_table';
    protected $fillable = ['b_name', 'b_date', 's_time', 'e_time', 'b_contact', 'user_id','status'];

}
