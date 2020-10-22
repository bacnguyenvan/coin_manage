<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class CoinBuy extends Model
{
    protected $table = 'coin_buy';

    protected $fillable = ['status'];

    static public function getList($id)
    {
    	$lists = self::where('user_id',Auth::guard('admin')->id())
    				->where('transaction_id',$id)
    				->whereNull('deleted_at')
    				->get();
    	return $lists;
    }
}
