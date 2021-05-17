<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Firma;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $firma=new Firma();
        $firma->nume_firma=$request->nume_firma;
        
        if($firma!=null)
        {
            MailController::sendSignupEmail($user->name, $user->email, $user->verification_code);
            return redirect()->route('login')->with(session()->flash('alert-success', 'Contul a fost creat. Verificati-va e-mail-ul pentru a va activa contul!'));
        }
        return view('dashboard');
    }
}
