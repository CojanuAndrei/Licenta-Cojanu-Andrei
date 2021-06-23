<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Firma;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ImputernicitController extends Controller
{
    public function verifImpAddImp(Request $request)
    {
        if(auth()->user()->id_firma!=null)
        {
            return redirect("home")->with(session()->flash('alert-danger', 'Nu aveti voie sa adaugati imputerniciti dintr-un cont de imputernicit!'));
        }
        if(DB::table('firmas')->select('id')->where('id_user','=',auth()->user()->id)->value('id')==null)
        {
            return redirect('insert-business');
        }
        return view("add/add_imputernicit");
    }
    public function verifImpEditFirma(Request $request)
    {
        if(auth()->user()->id_firma!=null)
        {
            return view("dashboard")->with(session()->flash('alert-danger', 'Nu aveti voie sa modifici datele firmei dintr-un cont de imputernicit!'));
        }
        return view("profile/edit_firma");
    }
    //
    public function register(Request $request)
    {
        $user= new User();
        $user->name=$request->nume;
        $user->id_firma=DB::table('Firmas')->where('id_user','=',auth()->user()->id)->value('id');
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->verification_code=sha1(time());
        $user->save();

        if($user!=null)
        {
            MailController::sendSignupEmail($user->name, $user->email, $user->verification_code);
            return back()->withStatus(__('Noul utilizator a fost adaugat ca imputernicit al firmei! Pentru a-si accesa contul, acesta trebuie sa acceseze link-ul de verificare primit pe adresa acestuia .'));
        }
        
        return back()->withStatus(__( 'Ceva nu a mers bine!'));
    }
    public function afisImpTable(Request $request)
    {
        if(auth()->user()->id_firma!=null)
        {
            $imps=DB::table('users')->where('id_firma',auth()->user()->id_firma)->get();
            
            return view("tables/tabel_imputerniciti",['imps'=>$imps]);
        }
        $subq=DB::table('firmas')->select('id')->where('id_user',auth()->user()->id)->value('id');
        if($subq==null)
        {
            return redirect('insert-business');
        }
        $imps=DB::table('users')->where('id_firma',$subq)->get();
        
        return view("tables/tabel_imputerniciti",['imps'=>$imps]);
    }
}
