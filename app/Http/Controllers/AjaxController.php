<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AjaxController extends Controller
{
    public function index(){
        $data = [
            "name" => "Pushpendra Kumar",
            "email" => "pk@gmail.com",
        ];
        return response()->json($data);
    }
    public function ajax(Request $request){
        $errors = Validator::make($request->only('name','email'),[
            'email' => 'required|email',
            'name' => 'required|string|max:100'
        ]);
        if($errors->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $errors->errors(),
            ],401);
        }
        return response()->json($request->all());
    }
}
