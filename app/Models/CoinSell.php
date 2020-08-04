<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class CoinSell extends Model
{
    protected $table = 'coin_sell';

    static public function getList()
    {
    	$lists = self::where('user_id',Auth::guard('admin')->id())
    				->where('coin_id',1)
    				->whereNull('deleted_at')
    				->get();
    	return $lists;
    }
}
