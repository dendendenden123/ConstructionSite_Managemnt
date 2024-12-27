<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidatesWhenResolvedTrait;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{


    public function create(){
        return view('/authenticate.login');
    }
    public function store(Request $request){
        

        if($request->email == "admin@gmail.com" && $request->password == "admin"){
            return redirect("/admin");
        }else{

            $validated =  $request->validate([
                "email" => ["required", "email"],
                "password" => ["required"]
            ]);
    
       
            
           if(! Auth::attempt( $validated)) {
   
                throw ValidationException::withMessages([
                    "email" => "credentials do not matched"
                ]);
                
           };
            request()->session()->regenerate();
    
            return redirect("/customer");
        }
     }

    public function destroy(Request $request){
        Auth::logout(); 

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
