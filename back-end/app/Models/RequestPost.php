<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class RequestPost extends Model
{
    use HasFactory;

    protected $table = 'tbl_orderRequestPost';
    protected $fillable = [
    	'postNumber',
    	'postStatus',
    	'deliveryAddress',
    	'shoppingPlace',
    	'deliverySchedule',
    	'paymentMethod',
    	'shoppingList',
    	'caption'
    ];

    public $timestamps = false;
    public $primaryKey = 'indexOrderRequestPost';

    /**
     *    [post description]
     *    @author Al Vincent Musa
     *    @return [type] [description]
     */
    public function post() {
		return $this->belongsTo(Post::class, 'postNUmber', 'postNumber');    	
    }
}