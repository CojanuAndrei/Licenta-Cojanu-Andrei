<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Firma;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $id = Auth::user()->id;
        Log::info('Showing the user profile for user: '.$id);
        if(Firma::where('id_user','=',$id)->exists())
        {
            return view('dashboard');
        }
        return redirect('insert-business');
    }
}
