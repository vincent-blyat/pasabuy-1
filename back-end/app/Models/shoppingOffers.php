<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingOffers extends Model
{
    use HasFactory;
    protected $table = 'tbl_shoppingofferpost';
    protected $primaryKey = 'indexShoppingOfferPost';
    public $timestamps = false;
}
