<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class CoinTransaction extends Model
{
	protected $table = 'coin_transaction';

    static public function getList()
    {
	    $lists = self::select('coins.name','coins.name_summary','coins.image','coin_transaction.id')
	    				->where('user_id',Auth::guard('admin')->id())
	    				->whereNull('coins.deleted_at')
	    				->leftJoin('coins','coins.id','coin_transaction.id')
	    				->get();
	    return $lists;
	}
}
