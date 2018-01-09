<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Database\seeds\DatabaseSeeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use App\Bergerpaint;
use App\Dataagro;
use Charts;
use Carbon\Carbon; 
class ChemicalSharesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //chemical shares

public function getchemicalView(){
		return view('chemical');
	}

    public function getchemicalShares(){
    Artisan::call('db:seed',[]);
   $time=DB::table('bergerpaints')->max('created_at');
	$BergerPaintsRows=Bergerpaint::where('created_at',$time)->get();
	$BergerPaint=$BergerPaintsRows[0];
	$DataAgroRows=Dataagro::where('created_at',$time)->get();
	$Dataagro=$DataAgroRows[0];
    DB::table('chemicals')
            ->where('symbol', $BergerPaint->symbol)
            ->update(['LDCP' => $BergerPaint->LDCP,'OPEN'=>$BergerPaint->OPEN,'HIGH'=>$BergerPaint->HIGH,'LOW'=>$BergerPaint->LOW,'CURRENT'=>$BergerPaint->CURRENT,'CHANGE'=>$BergerPaint->CHANGE,'VOLUME'=>$BergerPaint->VOLUME]);
    DB::table('chemicals')
            ->where('symbol', $Dataagro->symbol)
            ->update(['LDCP' => $Dataagro->LDCP,'OPEN'=>$Dataagro->OPEN,'HIGH'=>$Dataagro->HIGH,'LOW'=>$Dataagro->LOW,'CURRENT'=>$Dataagro->CURRENT,'CHANGE'=>$Dataagro->CHANGE,'VOLUME'=>$Dataagro->VOLUME]);

	
	$shares=DB::table('chemicals')->get();


	return compact('shares');
	}

	//berger paints
     public function getBergerPaintView(){
     	 $maxLDCP=DB::table('bergerpaints')->select('LDCP')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LDCP');
        $maxCHANGE=DB::table('bergerpaints')->select('CHANGE')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CHANGE');
        $maxLOW=DB::table('bergerpaints')->select('LOW')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LOW');
        $maxHIGH=DB::table('bergerpaints')->select('HIGH')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('HIGH');
        $maxCURRENT=DB::table('bergerpaints')->select('CURRENT')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CURRENT');
         $maxVOLUME=DB::table('bergerpaints')->select('VOLUME')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('VOLUME');
//charts logic

    $ldcp=Bergerpaint::select('ldcp','created_at')->whereRaw('date(created_at) = ?', [Carbon::today()])->get();
    $values=[];
    $labels=[];
   for($i=0;$i<count($ldcp);$i++)
        {   $t=$ldcp[$i]->created_at->toTimeString();
            array_push($values,$ldcp[$i]->ldcp);
            array_push($labels,$t);

        } 

    $chart=Charts::create('line', 'highcharts')
   ->title('Berger Paint Shares')
    ->values($values)
    ->labels($labels)
    ->dimensions(0,300);

        return view('Shares.BergerPaints', ['chart' => $chart,'ldcp' => $maxLDCP,'change' => $maxCHANGE,'low' => $maxLOW,'high' => $maxHIGH,'current' => $maxCURRENT,'volume' => $maxVOLUME]);
     }
	//data argo

      public function getDataArgoView(){
     	 $maxLDCP=DB::table('dataagros')->select('LDCP')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LDCP');
        $maxCHANGE=DB::table('dataagros')->select('CHANGE')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CHANGE');
        $maxLOW=DB::table('dataagros')->select('LOW')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('LOW');
        $maxHIGH=DB::table('dataagros')->select('HIGH')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('HIGH');
        $maxCURRENT=DB::table('dataagros')->select('CURRENT')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('CURRENT');
        $maxVOLUME=DB::table('dataagros')->select('VOLUME')->whereRaw('date(created_at) = ?', [Carbon::today()])->max('VOLUME');
//charts logic

    $ldcp=Dataagro::select('ldcp','created_at')->whereRaw('date(created_at) = ?', [Carbon::today()])->get();
    $values=[];
    $labels=[];
   for($i=0;$i<count($ldcp);$i++)
        {   $t=$ldcp[$i]->created_at->toTimeString();
            array_push($values,$ldcp[$i]->ldcp);
            array_push($labels,$t);

        } 

    $chart=Charts::create('line', 'highcharts')
   ->title('Data Agro Shares')
    ->values($values)
    ->labels($labels)
    ->dimensions(0,300);

        return view('Shares.DataArgo', ['chart' => $chart,'ldcp' => $maxLDCP,'change' => $maxCHANGE,'low' => $maxLOW,'high' => $maxHIGH,'current' => $maxCURRENT,'volume' => $maxVOLUME]);
     }

}
