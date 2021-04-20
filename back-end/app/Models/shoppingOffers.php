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

    // public function DB::update("update tbl_shoppingofferpost set postNumber = '"$postNumber"' indexShoppingOfferPost = '"$indexShoppingOfferPost"'");
    // public function DB::update("update tbl_shoppingofferpost set postNumber = '"$postNumber"' indexShoppingOfferPost = '"$indexShoppingOfferPost"'");
    
    
    // (Request $req){
    //     $indexShoppingOfferPost = $req->indexShoppingOfferPost;
    //     $postNumber  = $req->postNumber ;
    //     $postStatus = $req->postStatus;
    //     $deliveryArea = $req->deliveryArea;
    //     $shoppingPlace = $req->shoppingPlace;
    //     $deliverySchedule = $req->deliverySchedule;
    //     $transportMode = $req->transportMode;
    //     $capacity = $req->capacity;
    //     $paymentMethod = $req->paymentMethod;
    //     $caption = $req->caption;
    //     mysqli_query($con, "update
    //     `tbl_shoppingofferpost`
    // set
    //     `postNumber` = '"$postNumber"',
    //     `postStatus` = '"$postStatus"',
    //     `deliveryArea` = '"$deliveryArea"',
    //     `shoppingPlace` = '"$shoppingPlace"',
    //     `deliverySchedule` = '"$deliverySchedule"',
    //     `transportMode` = '"$transportMode"',
    //     `capacity` = '"$capacity"',
    //     `paymentMethod` = '"$paymentMethod"',
    //     `caption` = '"$caption"'
    // WHERE
    // 'indexShoppingOfferPost' = $indexShoppingOfferPost")
    
    //}
}
