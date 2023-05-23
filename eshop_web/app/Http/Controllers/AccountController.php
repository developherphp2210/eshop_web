<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show(Request $request,string $page){        
        $user = $this->GetMyUser($request);
        return view('dashboard.account.accountpage')->with(['title' => 'Account','user' => $user,'page' => $page]);                
    }

    public function dash(Request $request){
        $user = $this->GetMyUser($request);
        return view('dashboard.mainpage')->with(['title' => 'Main Page','user' => $user]);
    }

    private function GetMyUser(Request $request){
        $id = $request->session()->get('user_id');        
        return User::find($id);
    }

    public function save(Request $request,string $page){        

        $user = $this->GetMyUser($request);
        switch ($page){
            case 1:$this->modify_user($request,$user);
            case 2:$this->change_password($request,$user);
        }        
                
        return view('dashboard.account.accountpage')->with(['title' => 'Account','user' => $user,'page' => $page]);        
    }

    private function change_password($request,$user){

    }

    private function modify_user($request,$user){
        if( $request->hasFile('photo') ) {
            $path = $request->file('photo')->storeAs('image','user'.$user->id.'.'.$request->photo->extension());
            $user->image = $path;  
        }                     
        $user->user_name = $request->user_name;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->cap = $request->cap;
        $user->codfisc = $request->codfisc;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->ragsoc = $request->ragsoc;
        $user->piva = $request->piva;        
        $user->save();
    }
}
