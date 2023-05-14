<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show(Request $request,string $page){
        $id = $request->session()->get('user_id');        
        $user = User::where('id',$id)->get();
        switch ($page) {
            case '1':return view('dashboard.account.account_1')->with(['title' => 'Account','user' => $user]);
        }        
    }
}
