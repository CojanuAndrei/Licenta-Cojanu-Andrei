<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Firma;
use App\Models\licitatie;
use App\Models\lot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\Object_;

require '../vendor/autoload.php';

class FormularController extends Controller
{
    //
    public function alegereLicitatie(Request $request)
    {
        if(auth()->user()->id_firma!=null)//imputernicit
        {
            $licitatii=DB::table('licitaties')->where('id_firma',auth()->user()->id_firma)->get();
            
            return view("generare\alegere_licitatie",['licitatii'=>$licitatii]);
        }
        $subq=DB::table('firmas')->select('id')->where('id_user',auth()->user()->id)->value('id');//proprietar
        if($subq==null)//fara datele firmei complete
        {
            return redirect('insert-business');
        }
        $licitatii=DB::table('licitaties')->where('id_firma',$subq)->get();
        
        return view("generare\alegere_licitatie",['licitatii'=>$licitatii]);
    }
    public function alesLicitatie(Request $request)
    {
        $id_lic=$request->id_lic;
        $tipuri_formulare=DB::table('tip_formulars')->get();
        return view("generare.tabel_formulare",['id_lic'=>$id_lic],['tipuri_formulare'=>$tipuri_formulare]);
    }
    public function alesFormular(Request $request)
    {
        $id_lic=$request->id_lic;
        $id_form=$request->id_form;
        $tipuri_formulare=DB::table('tip_formulars')->where('id',$id_form)->get();
        $licitatie=DB::table('licitaties')->where('id',$id_lic)->get();
        $firma=DB::table('firmas')->where('id',$licitatie[0]->id_firma)->get();
        
        $file=fopen($tipuri_formulare[0]->template_path,"r");
        $text=$file.fread($file,filesize($tipuri_formulare[0]->template_path));
        $text=str_replace("l_beneficiar",$licitatie[0]->beneficiar,$text);
        $text=str_replace("l_adresa",$licitatie[0]->adresa.", ".$licitatie[0]->localitate.", ".$licitatie[0]->tara,$text);
        $text=str_replace("l_titlu",$licitatie[0]->titlu,$text);
        $text=str_replace("l_tip",$licitatie[0]->tip_contract,$text);
        $text=str_replace("l_valoare",$licitatie[0]->valoare_totala_ftva,$text);
        $text=str_replace("l_moneda",$licitatie[0]->moneda,$text);
        $text=str_replace("f_denumire",$firma[0]->nume_firma,$text);
        $text=str_replace("f_numeadmin",$firma[0]->nume_admin,$text);
        $text=str_replace("f_adresa",$firma[0]->adresa_firma,$text);
        $text=str_replace("c_data",date("d-m-y"),$text);
        

        
        return view("generare.generator_formular",['id_lic'=>$id_lic,'pdf'=>$text,'tip_form'=>$tipuri_formulare]);
    }
    public function salvezFormular(Request $request)
    {
        
        if(auth()->user()->id_firma!=null)//imputernicit
        {
            $licitatii=DB::table('licitaties')->where('id_firma',auth()->user()->id_firma)->get();
            
            return view("generare\alegere_licitatie",['licitatii'=>$licitatii]);
        }
        $subq=DB::table('firmas')->select('id')->where('id_user',auth()->user()->id)->value('id');//proprietar
        $licitatii=DB::table('licitaties')->where('id_firma',$subq)->get();
        return view("generare\alegere_licitatie",['licitatii'=>$licitatii]);
    }
}
