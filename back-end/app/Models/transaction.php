<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table = 'tbl_transaction';
    public $timestamps = false;
    public $primaryKey = 'indexTransactionPost';

    public function post()
    {
        # code...
        return $this->belongsTo(Post::class,'postNumber','postNumber');
    }
    public function transactionSender()
    {
        # code...
        return $this->hasOne(userInformation::class,'email','emailCustomerShopper');
    }
}
