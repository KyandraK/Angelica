<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        
        return view('profile',[
            'user' => $user
        ]);
    }

    public function profileUpdate(Request $request){
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required'
          ]);

        $user = Auth::user();
        
        $userSave = User::findOrFail($user->id);

        $password = $user->password;

        if ($request->password !== null && $request->confirm_password !== null) {
            $password =  bcrypt($request->password);
        } 

        $userSave->update([
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'phone_number' => $validate['phone'],
            'email' => $validate['email'],
            'password' => $password
        ]);

        return redirect()->back()->with('success','Profile berhasil di update !');

        


        

    }
}
