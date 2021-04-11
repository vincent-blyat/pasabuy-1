<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PasabuyUser;
use App\Models\OfferPost;
use App\Models\RequestPost;
use Webpatser\Uuid\Uuid;

class Post extends Model
{
    use HasFactory;

    protected $table = 'tbl_post';
    protected $fillable = ['email', 'postIdentity', 'postStatus'];

    public $timestamps = false;
    public $primaryKey = 'indexPost';

    public static function boot()
	{
    parent::boot();
    self::creating(function ($model) {
        $model->postNumber = (string) Uuid::generate(4);
    });
	}

    public function offer_post() {
    	return $this->hasOne(OfferPost::class, 'postNumber', 'postNumber');
    }

    public function request_post() {
        return $this->hasOne(RequestPost::class, 'postNumber', 'postNumber');
    }

    public function get_user_name() {
        return $this->hasOne(userInformation::class, 'email', 'email');
    }
}
