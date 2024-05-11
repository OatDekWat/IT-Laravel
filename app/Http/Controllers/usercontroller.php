<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;


use App\Models\User;


class userController extends Controller
{
    public function showdata(){

        $User = User::all();

        return view('userData', compact('users'));
    }
        public function destroy($id){
            $user = User::fine($id);
            $user->delete();

            return redirect()->rout('user.data');

}
}