<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userAddress extends Model
{
    use HasFactory;
    protected $table = 'tbl_userAddress';
    // protected $fillable = [
    //     'email',
    //     'course',
    //     'educationLevel',
    // ];
}
