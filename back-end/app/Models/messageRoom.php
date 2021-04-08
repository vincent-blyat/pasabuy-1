<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messageRoom extends Model
{

    use HasFactory;
    protected $table = "tbl_messageRoom";
    protected $primaryKey = 'indexMessageRoom';
    public $timestamps = false;
    
    public function getMessages()
    {
        # code...
        // return $this->hasManyThrough(Messages::class,userInformation::class,'messageRoomNumber', 'messageSender', 'messageRoomNumber','email');
        return $this->hasMany(Messages::class, 'messageRoomNumber', 'messageRoomNumber');
    }
    
}
