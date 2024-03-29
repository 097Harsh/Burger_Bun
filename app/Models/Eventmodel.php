<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventmodel extends Model
{
    use HasFactory;
    protected $table = 'Event';
    protected $fillable= ['e_id','user_id','e_date','e_type','status','title']; 
}
