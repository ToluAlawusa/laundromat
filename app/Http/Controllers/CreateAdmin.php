<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CreateAdmin extends Controller {
    
    public function showCreateAdmin () {
        
        return view('createadmin');
    }
    
     public function doCreateAdmin(Request $request) {

       $this->validate($request, [
                'firstname' => 'required|alpha',
                'lastname' => 'required|alpha',
                'email' => 'required|email',
                'password' => 'required',
            ]);

                $admin = new Admin();
                $admin->firstname = $request['firstname'];
                $admin->lastname = $request['lastname'];
                $admin->email = $request['email'];
                $admin->password = bcrypt($request['password']);
                $admin->save();
                
                // Event::fire(new AdminCreated($admin));
            
            return view('adminlogin');
    }
}