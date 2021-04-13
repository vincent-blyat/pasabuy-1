<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $table = "tbl_message";
    protected $primaryKey = 'indexMessage';
    public $timestamps = false;

       
    public function getMessageSender()
    {
        # code...
        return $this->hasOne(PasabuyUser::class, 'email', 'messageSender');
    }

}
