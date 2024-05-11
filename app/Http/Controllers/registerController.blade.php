<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'pass' => 'required|min:8',
        ]);

        $user = new User;

        $user->fill($request->all());
        $user->save();



        return back()->with(['success' => 'User has been saved!']);    
    }

}