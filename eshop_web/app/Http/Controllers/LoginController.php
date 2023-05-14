<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    public function check_user(Request $request){

        $valid = $request->validate([
            'email' => 'required | email',
            'password' => 'required | string'
        ]);            

        if (Auth::attempt($valid))
        {
            $request->session()->regenerate();  
                        
            $user = User::where('email',$request->email)->get();                    
            $request->session()->put('user_id', $user[0]->id);
            
            return view('dashboard.mainpage')->with(['title' => 'Main Page','user' => $user]);
        }

        return redirect()->back()->withErrors(['errors' => 'Utente non Registrato']);
    }

    public function insert(Request $request){

        $valid = $request->validate([
            'user_name' => 'required | string',
            'email' => 'required | email',
            'password' => 'required | string'
        ]);


        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_name' => $request->user_name
        ]);

        if ($user){
            return redirect('login_user');
        }

        return redirect()->back()->withErrors(['errors' => "Errore nella creazione dell'utente" ]);

    }

    public function logout(Request $request){
        // $request->session()
        return redirect('login_user');
    }
}
