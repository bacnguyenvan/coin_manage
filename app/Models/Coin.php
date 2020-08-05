<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Coin extends Model
{
    static function getCoinByPK($id)
    {
    	return self::where('id',$id)
    				->whereNull('deleted_at')
    				->first();
    }
}
