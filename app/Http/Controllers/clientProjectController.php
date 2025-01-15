<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\UpdateTimeline;

class clientProjectController extends Controller
{
    public function index(){   
        if(Auth::check()){
            return view('customer_dashboard', [
            "UserInfo" => Auth::User(),
            "ProjectInfo" => UpdateTimeline::where('user_id', Auth::id())->orderBy('id', 'desc')->get()]);
        }else{
            return  redirect('/');
        }
    }

    public function show($id){
        if(Auth::check()){ 
            return view('customer_Show_Card', [
              "UserInfo" => Auth::User(),
             "ProjectInfo" => UpdateTimeline::where('id', $id)->orderBy('id', 'desc')->get()]);
        }else{
            return  redirect('/');
        }
    }
}
