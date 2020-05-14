<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controllers;
use App\User;
use Illuminate\Foundation\Auth\RegistersUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validatior;


class registercontroller extends Controller
{
    public function index() {
    	return view('register');
    }


    protected function validator(array $data)
    {
    	return validator::make($data, [
    		'name' => ['required' , 'string','max:255'],
    		'username' => ['required', 'string', 'unique:users','max:255'],
    		'email' => ['required','string','email','max:255','unique:users'],
    		'password' => ['required','string','min:8','confirmed']
    	]);
    }

    protected function create(array $data)
    {
    	return User::create([
    		'nama' => $data['nama'],
    		'username' => $data['username'],
    		'email' => $data('email'),
    		'password' => Hash::make($data['password']),
    	]);
    }


}





