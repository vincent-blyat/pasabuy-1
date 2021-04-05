<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userInformation extends Model
{
    use HasFactory;
    protected $table = 'tbl_userInformation';
    protected $primaryKey = 'indexUserInformation';
    public $timestamps = false;
}
