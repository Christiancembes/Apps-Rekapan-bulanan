<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class logincontroller extends Controller
{
    
    public function index()
    {
        return view('login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    /*public function check_login(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        if(Auth()->attempt(['email' => $email, 'password' => $password])) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Gagal!'
            ], 401);
        }

        

    }*/


    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/admin');
    }

   
}






