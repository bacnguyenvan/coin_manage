<?php

namespace App\Http\Controllers\APIs;

use App\CEO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\CEOResource;
use Illuminate\Support\Facades\Validator;

class CEOController extends Controller
{
    public function list()
    {
        $ceos = CEO::all();

        return response()->json([
            'success' => true,
            'ceos' => $ceos
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->only('name','company_name','year');
        
        $validator = Validator::make($data, [
            'name' => 'required|max:255',
            'year' => 'required|max:255',
            'company_name' => 'required'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors()]);
        }

        $ceo = CEO::create($data);
        
        return response()->json([
            'success' => true,
            'message' => 'add success',
            'ceo' => $ceo
        ]);
    }
}
