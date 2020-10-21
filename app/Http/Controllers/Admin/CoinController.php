<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\Models\CoinBuy;
use App\Models\CoinSell;
use App\Models\CoinTransaction;

use AWS;

class CoinController extends Controller
{
    public function list()
    {
        $aws = AWS::createClient('sns');
        $aws->public([
            'MessageAttributes' => [
                'AWS.SNS.SMS.SMSType' => [
                    'DateType' => 'String',
                    'StringValue' => 'Transactional'
                ]
            ],
            'Message' => 'Hello backmt',
            'PhoneNumber' => '+84347091952'
        ]);

        $list = CoinTransaction::getList();
    	return view('admin.coins.list',['list' => $list]);
    }

    public function transaction(Request $request,$id)
    {
    
    	$list_buy = CoinBuy::getList($id);
    	$list_sell = CoinSell::getList($id);
    	$msg = '';
        $coin_transaction = CoinTransaction::getCoinByPK($id);
        if(empty($coin_transaction)) abort(404);
        $coin = Coin::getCoinByPK($coin_transaction->coin_id);
        if(empty($coin)) abort(404);
        
    	$data = [
    		'list_buy' => $list_buy,
    		'list_sell' => $list_sell,
            'name_coin' => $coin->name_summary,
            'transaction_id' => $id
    	];

    	if($request->isMethod('post')){
            if($request->form_name == "form_add_coin_buy"){
                CoinBuy::insert($request->except(['_token','form_name']));
                $msg = 'Add buy coin success !';
            }else if($request->form_name == "form_add_coin_sell"){
                CoinSell::insert($request->except(['_token','form_name']));
                $msg = 'Add sell coin success !';
            }
    		
    		return redirect()->route('coins-transaction',$id)->with('success',$msg);
    	}
    	return view('admin.coins.transaction',$data);
    }

    public function addCoinSell(Request $request)
    {
        $data = [
            'coin_id' => $request->coin_id,
            'user_id' => $request->user_id,
            'date_transaction' => $request->date,
            'number' => $request->number,
            'sell_price' => $request->sell_price
        ];
        if($data['date_transaction'] == '' || $data['number'] == '' || $data['sell_price'] == ''){
            return -1;
        }else{
            
            $list = CoinSell::getList();
            return view('admin.coins.coin_sell_info',['list_sell' => $list]);
        }
       

    }
}
