<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidatesWhenResolvedTrait;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class registerController extends Controller
{
    public function store(Request $request){
        $validated =  $request->validate([
             'name' => ["required"],
             'email' => ["required", "email"],
             "password" => ["required", "confirmed"]
         ]);

         //temporarily all registered user is set to 'customer'
         $validated += ['user_type' => "customer"];

        $user =  User::create($validated);
 
        Auth::login($user);
 
         return redirect("/customer");
 
     }
}
