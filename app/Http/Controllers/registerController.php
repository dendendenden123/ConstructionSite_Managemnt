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

        $data = $request->all();

        $data['user_type'] = "customer";
        $data['status'] = "active";

        $user =  User::create($data);
 
        Auth::login($user);
 
         return redirect("/client-show/" . Auth::user()->id);
 
     }
}
