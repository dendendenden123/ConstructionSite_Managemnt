<?php


namespace App\Http\Controllers;
use App\Models\UpdateTimeline;
use App\models\User;
use Carbon\Carbon;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidatesWhenResolvedTrait;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        return view("datum_backend.client");
    }

    public function show($id)
    {

        // check if user has logged in
        if (Auth::id() !== (int) $id) {
            abort(403, 'Unauthorized action.');
        }

        $user = User::with(["updateTimeline", "project", "crmInteraction", "contract"])->find($id);

        $timeline = UpdateTimeline::where("user_id", "=", $id)->orderBy("created_at", 'asc')->get();

        return view("/datum_backend.client", ["user" => $user, "timelne" => $timeline]);
    }

    public function create()
    {
        return view('/authenticate.login');
    }
    public function store(Request $request)
    {


        if ($request->email == "admin@gmail.com" && $request->password == "admin") {
            return redirect("/admin");
        } else {

            $validated = $request->validate([
                "email" => ["required", "email"],
                "password" => ["required"]
            ]);



            if (!Auth::attempt($validated)) {

                throw ValidationException::withMessages([
                    "email" => "credentials do not matched"
                ]);

            }
            ;
            request()->session()->regenerate();



            return redirect("/client-show/" . Auth::id());
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
