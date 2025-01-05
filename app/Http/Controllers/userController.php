<?php


namespace App\Http\Controllers;
use App\models\User;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidatesWhenResolvedTrait;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(){
        return view("datum_backend.client");
    }

    public function show($id){

        if (Auth::id() !== (int) $id) {
            abort(403, 'Unauthorized action.');
        }

        return view("/datum_backend.client", ["user" => User::find($id)]);
    }

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

        
        
            return redirect("/client-show/" . Auth::id());
        }
     }

    public function destroy(Request $request){
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
