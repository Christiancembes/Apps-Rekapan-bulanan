<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutcontroller extends Controller
{
    public function destroy()
    {
    	return redirect()->to('/');
    }
}
