<?php

namespace App\Http\Controllers;
use App\Attockcement;
use App\Bestwaycement;
use Database\seeds\DatabaseSeeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Charts;
use Carbon\Carbon;  
class CementSharesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //cement shares

 public function getcementView(){
  
   
       return view('cement');     

    
}

    public function getcementShares(){
    Artisan::call('db:seed',[]);
    $time=DB::table('attockcements')->max('created_at');
	$AttockCementRows=Attockcement::where('created_at',$time)->get();
	$Attockcement=$AttockCementRows[0];
	$BestwayCementRows=Bestwaycement::where('created_at',$time)->get();
	$Bestwaycement=$BestwayCementRows[0];
    DB::table('cements')
            ->where('symbol', $Attockcement->symbol)
            ->update(['LDCP' => $Attockcement->LDCP,'OPEN'=>$Attockcement->OPEN,'HIGH'=>$Attockcement->HIGH,'LOW'=>$Attockcement->LOW,'CURRENT'=>$Attockcement->CURRENT,'CHANGE'=>$Attockcement->CHANGE,'VOLUME'=>$Attockcement->VOLUME]);
    DB::table('cements')
            ->where('symbol', $Bestwaycement->symbol)
            ->update(['LDCP' => $Bestwaycement->LDCP,'OPEN'=>$Bestwaycement->OPEN,'HIGH'=>$Bestwaycement->HIGH,'LOW'=>$Bestwaycement->LOW,'CURRENT'=>$Bestwaycement->CURRENT,'CHANGE'=>$Bestwaycement->CHANGE,'VOLUME'=>$Bestwaycement->VOLUME]);

	
	$shares=DB::table('cements')->get();


	return compact('shares');
	}

//attock cement

     public function getAttockcementView(){
        $maxLDCP=DB::table('attockcements')->select('LDCP')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LDCP');
        $maxCHANGE=DB::table('attockcements')->select('CHANGE')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CHANGE');
        $maxLOW=DB::table('attockcements')->select('LOW')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LOW');
        $maxHIGH=DB::table('attockcements')->select('HIGH')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('HIGH');
        $maxCURRENT=DB::table('attockcements')->select('CURRENT')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CURRENT');
         $maxVOLUME=DB::table('attockcements')->select('VOLUME')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('VOLUME');
//charts logic

    $ldcp=Attockcement::select('ldcp','created_at')->whereRaw('date(created_at) = ?', [Carbon::today()])->get();
    $values=[];
    $labels=[];
   for($i=0;$i<count($ldcp);$i++)
        {   $t=$ldcp[$i]->created_at->toTimeString();
            array_push($values,$ldcp[$i]->ldcp);
            array_push($labels,$t);

        } 

    $chart=Charts::create('line', 'highcharts')
   ->title('Attock Cements Shares')
    ->values($values)
    ->labels($labels)
    ->dimensions(0,300);

     	return view('Shares.AttockCement', ['chart' => $chart,'ldcp' => $maxLDCP,'change' => $maxCHANGE,'low' => $maxLOW,'high' => $maxHIGH,'current' => $maxCURRENT,'volume' => $maxVOLUME]);
        
     }


	//bestway cement

      public function getBestwaycementView(){

 $maxLDCP=DB::table('bestwaycements')->select('LDCP')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LDCP');
        $maxCHANGE=DB::table('bestwaycements')->select('CHANGE')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CHANGE');
        $maxLOW=DB::table('bestwaycements')->select('LOW')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LOW');
        $maxHIGH=DB::table('bestwaycements')->select('HIGH')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('HIGH');
        $maxCURRENT=DB::table('bestwaycements')->select('CURRENT')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CURRENT');
         $maxVOLUME=DB::table('bestwaycements')->select('VOLUME')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('VOLUME');
//charts logic

    $ldcp=Bestwaycement::select('ldcp','created_at')->whereRaw('date(created_at) = ?', [Carbon::today()])->get();
    $values=[];
    $labels=[];
   for($i=0;$i<count($ldcp);$i++)
        {   $t=$ldcp[$i]->created_at->toTimeString();
            array_push($values,$ldcp[$i]->ldcp);
            array_push($labels,$t);

        } 

    $chart=Charts::create('line', 'highcharts')
   ->title('Bestway Cements Shares')
    ->values($values)
    ->labels($labels)
    ->dimensions(0,300);

        return view('Shares.BestwayCement', ['chart' => $chart,'ldcp' => $maxLDCP,'change' => $maxCHANGE,'low' => $maxLOW,'high' => $maxHIGH,'current' => $maxCURRENT,'volume' => $maxVOLUME]);
        
     	
     }
}
