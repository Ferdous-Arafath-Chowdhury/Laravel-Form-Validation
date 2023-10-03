<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    //

    public function add(Request $req)
{
   

    $validatedData = $req->validate([
        'Name' => ['required', 'max:255'],
        'Email' => ['required', 'unique:users'],
        'Password' => ['min:6'],
    ]);

     $user = new User();

     $user->name = $req->Name;
     $user->email = $req->Email;
     $user->password =  Hash::make($req->Password);

     $user->save(); 
     $req->session()->flash('success', 'Student Added Successfully.');
     return redirect()->back();

    // return  $req->all(); 
   



    
}

}


