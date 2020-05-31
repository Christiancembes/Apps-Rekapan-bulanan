<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    
    public function create()
    {
        return view('beranda.admin');
    }


	public function store()
    {	

    	if (auth()->attempt(request(['email','password'])) == false) {
    		return back()->withErrors([
    			'message' => 'The email or password is in correct,
    			please try again'	
    		]);

    		return redirect()->to('/admin');
    	}
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect()->to('/admin');
    }
}

