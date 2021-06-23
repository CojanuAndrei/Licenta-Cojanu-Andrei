<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Firma;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        if(Firma::where('id_user','=',$id)->exists() || Auth::user()->id_firma!=null)
        {
            if(auth()->user()->id_firma!=null)
            {
                $imps=DB::table('users')->where('id_firma',auth()->user()->id_firma)->get();

                return view("dashboard",['imps'=>$imps]);
            }
            $subq=DB::table('firmas')->select('id')->where('id_user',auth()->user()->id)->value('id');
            $imps=DB::table('users')->where('id_firma',$subq)->get();
            return view('dashboard',['imps'=>$imps]);
        }
        return redirect('insert-business');
    }
}
