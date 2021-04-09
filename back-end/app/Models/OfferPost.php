<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class OfferPost extends Model
{
    use HasFactory;

    protected $table = 'tbl_shoppingOfferPost';
    protected $fillable = ['postNumber', 'postStatus', 'deliveryArea', 'shoppingPlace', 'deliverySchedule', 'transportMode', 'capacity', 'paymentMethod', 'caption'];

    public $timestamps = false;
    public $primaryKey = 'indexShoppingOfferPost';

    public function post() {
    	return $this->belongsTo(Post::class, 'postNumber', 'postNumber');
    }
}