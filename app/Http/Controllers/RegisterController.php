<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function register(StoreRegisterRequest $request){
        User::create($request->all());
        return redirect('/dashboard/login')->with('success', 'Pendaftaran berhasil!');
    }
}
