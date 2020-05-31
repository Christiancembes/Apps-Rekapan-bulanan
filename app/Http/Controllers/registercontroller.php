<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Auth\Event\Registered;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validatior;


class registercontroller extends Controller
{
        public function create()
        {
            return view('register');
        }


        public function store() 
        {
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',    
            ]);

            $users = User::create(request(['name','email','password']));

            auth()->login($users);

            return redirect()->to('/login');
        }


     


/*   protected function validator(array $data)
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



    *
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
    public function register(Request $request)
    {
        $this-Validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // send email to registered user
        \Mail::send('email.user.register',compact('user'), function($message) use ($user) {
            $mail->to($user->email,$user->name)
                 ->from('mail@laravel.web.id', 'Laravel.web.id')
                 ->subject('Pendaftaran Berhasil');
        });
    
    //log
    \Log::debug('New user has been registered.', ['email' => $user->email]);

    $this->guard()->login($user);

    return redirect($this->redirectPath());
    }*/


}





