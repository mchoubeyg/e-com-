<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;


class Userscontroller extends Controller
{





public function login(){
return view("login");

}



public function registration(){

return view("registration");

}



public function registerUser(Request $request){
    
    $request->validate([
    'name'=>'required|string|alpha',
    'email'=> 'required|email|unique:users',
    'password'=> 'required|min:5|max:10',
    'Confirm_password'=> 'required|same:password|min:5|max:10'
]);

$user= new User();
$user->name=$request->name;
$user->email=$request->email;
$user->password=Hash::make($request->password);
$res=$user->save();
if($res){

    return back()->with('success','You Have Registered Successfully');

}
else{

    return back()->with('fail','Something Wrong');

}
return redirect('/login');
}



public function loginUser(Request $request){

    $request->validate([
        'email'=> 'required',
        'password'=> 'required|min:5',
        ]);

        $user= User::where('email','=',$request->email)->first();
        if($user){
        if(Hash::check($request->password,$user->password))
        {
            $request->session()->put('user',$user);
            return redirect('/');
        }
        else{
            return back()->with('fail','Password Not Matches');
        }
        }
        else{
            return back()->with('fail','This email is not registered');
        }
}








}



