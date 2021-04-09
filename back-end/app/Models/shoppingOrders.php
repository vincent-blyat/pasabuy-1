<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingOrders extends Model
{
    use HasFactory;
    protected $table = 'tbl_orderrequestpost';
    protected $primaryKey = 'indexOrderRequestPost';
    public $timestamps = false;
}
