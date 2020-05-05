<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class SessionController extends Controller
{
    public function create(Request $request){

        if ( !Auth::attempt ($request->only(['email', 'password']))){
         return redirect()->back()->withErrors('E=Mail ou senha incorreto!');
        }

        return redirect ('/psicologo/index');



    }

    public function index()
    {

        return view('session.index');
    }
}
