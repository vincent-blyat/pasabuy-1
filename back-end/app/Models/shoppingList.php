<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingList extends Model
{
    use HasFactory;
    protected $table = 'tbl_shoppingList';
    public $timestamps = false;
    public $primaryKey = 'indexOrderRequestPost';

    public function post()
    {
        # code...
        return $this->belongsTo(Post::class, 'shoppingListNumber','shoppingListNumber');
    }
}
