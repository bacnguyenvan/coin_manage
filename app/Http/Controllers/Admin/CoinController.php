<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CoinBuy;
use App\Models\CoinSell;

class CoinController extends Controller
{
    public function list()
    {
    	return view('admin.coins.list');
    }

    public function transaction(Request $request)
    {
    	$list_buy = CoinBuy::getList();
    	$list_sell = CoinSell::getList();
    	
    	$data = [
    		'list_buy' => $list_buy,
    		'list_sell' => $list_sell
    	];

    	if($request->isMethod('post')){
    		CoinBuy::insert($request->except('_token'));
    		return redirect()->route('coins-transaction')->with('success','Add buy coin success !');
    	}
    	return view('admin.coins.transaction',$data);
    }
}
