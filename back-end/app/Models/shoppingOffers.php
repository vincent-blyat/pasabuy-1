<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class shoppingOffers extends Model
{
    use HasFactory;
    protected $table = 'tbl_shoppingofferpost';
    protected $primaryKey = 'indexShoppingOfferPost';
    public $timestamps = false;

    public function posts(){
        return $this->hasOne(Post::class, 'postNumber', 'postNumber');
    }
}
