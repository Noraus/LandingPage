<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register as reg;

class register extends Controller
{
    public function insert(Request $request){

        $request->validate([
            'username' => 'required|min:5|max:15',
            'password' => 'required|min:8|max:15',
            'email' => 'required|min:9|max:30'
        ]);
        $reg = new reg;

        $reg->username = $_POST['username'];
        $reg->password = $_POST['password'];
        $reg->email = $_POST['email'];
        $reg->confirmpass = $_POST['confirmpass'];
        $reg->save();

        return (view('registrado'));
    }
}
