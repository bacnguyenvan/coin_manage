<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoinController extends Controller
{
    public function list()
    {
    	return view('admin.coins.list');
    }

    public function transaction()
    {
    	return view('admin.coins.transaction');
    }
}
