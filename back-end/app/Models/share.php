<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class share extends Model
{
    use HasFactory;
    protected $table = 'tbl_share';
    public $timestamps = false;
    public $primaryKey = 'indexShare';

    public function post()
    {
        # code...
        return $this->hasOne(Post::class,'postNumber','postNumber');
    }

    public function user()
    {
        # code...
        return $this->hasOne(PasabuyUser::class,'email','sharerEmail');
    }
}
