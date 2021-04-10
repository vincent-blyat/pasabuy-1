<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PasabuyUser extends Model
{
    use HasFactory;

    protected $table = 'tbl_userInformation';
    protected $fillable = ['email', 'firstName', 'lastName', 'phoneNumber', 'gender', 'birthDate', 'profilePicture', 'validId', 'verifyStatus'];

    public function post() {
    	return $this->hasMany(Post::class, 'email', 'email');
    }
    public function share() {
    	return $this->hasOne(Share::class, 'sharerEmail', 'email');
    }
}
