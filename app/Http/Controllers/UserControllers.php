<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    //
    public function User(){
        return view('UserForm');
    }
    public function store(Request $request){
        $validate = $request->validate(
            [
                'identity_number' => 'min:10',
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',
                'gender' =>'required',
            ],
            [
                'identity_number.min' => '*Must be 10 character',
                'first_name.required' => 'enter information',
                'last_name.required' => 'enter information',
                'phone.required' => 'enter information',
                'gender.required'=>'male là 1 và female là 2',
            ]
        );
        return $validate;
    }
}
