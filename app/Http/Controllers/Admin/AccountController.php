<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function list()
    {
    	return "SUCCESS";//view('admin.coins.list');
    }
}
