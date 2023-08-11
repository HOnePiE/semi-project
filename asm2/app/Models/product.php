<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    
    // protected $fillable    = ['productName','image','category','price','qulityOnStock','status','shortDes','description',];
}
