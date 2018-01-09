<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Charts;
use Carbon\Carbon; 
use App\Attockcement;
use App\Bestwaycement;
use App\Bergerpaint;
use App\Dataagro;
class ShareController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

	//views
	public function getFaq(){
    return view('faq');
}
	public function getDashboard(){
	$ldcpBP=Bergerpaint::select('ldcp','created_at')->orderBy('created_at','desc')->take(10)->get();
	$ldcpDA=Dataagro::select('ldcp','created_at')->orderBy('created_at','desc')->take(10)->get();
	$ldcpAC=Attockcement::select('ldcp','created_at')->orderBy('created_at','desc')->take(10)->get();
	$ldcpBWC=Bestwaycement::select('ldcp','created_at')->orderBy('created_at','desc')->take(10)->get();

    $values1=[];
    $values2=[];
    $values3=[];
    $values4=[];
    $labels=[];
   for($i=0;$i<count($ldcpBP);$i++)
        {   $t=$ldcpBP[$i]->created_at->toTimeString();
            array_push($values1,$ldcpBP[$i]->ldcp);
            array_push($labels,$t);

        }
         for($i=0;$i<count($ldcpDA);$i++)
        {   $t=$ldcpDA[$i]->created_at->toTimeString();
            array_push($values2,$ldcpDA[$i]->ldcp);

        } 
         for($i=0;$i<count($ldcpAC);$i++)
        {   $t=$ldcpAC[$i]->created_at->toTimeString();
            array_push($values3,$ldcpAC[$i]->ldcp);

        }  
        for($i=0;$i<count($ldcpBWC);$i++)
        {   $t=$ldcpBWC[$i]->created_at->toTimeString();
            array_push($values4,$ldcpBWC[$i]->ldcp);

        } 

    $chart1=Charts::multi('line', 'highcharts')
   ->title('Market Summary Line Graph')
    ->labels($labels)
    ->dataset('Berger Paints',$values1)
    ->dataset('Data Argo',$values2)
    ->dataset('Attock Cements',$values3)
    ->dataset('Bestway Cements',$values4)
    ->dimensions(0,300);
    //second graph
    $chart2=Charts::multi('bar', 'highcharts')
   ->title('Market Summary Bar Graph')
    ->labels($labels)
    ->dataset('Berger Paints',$values1)
    ->dataset('Data Argo',$values2)
    ->dataset('Attock Cements',$values3)
    ->dataset('Bestway Cements',$values4)
    ->dimensions(0,300);

		return view('index',['chart1'=>$chart1,'chart2'=>$chart2]);
	}
	

	

	


}
