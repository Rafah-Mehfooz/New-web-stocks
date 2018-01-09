<?php

namespace App\Http\Controllers;
use \Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Portfolio;
use Session;
class PortfolioController extends Controller
{
    

	public function __construct(){
		$this->middleware('auth');
	}
    public function getPortfolioView(){
       
      
   
      return view('portfolio');
	}
	public function getPortfolio(){

 $id=Auth::user()->id;
       $p=DB::table('portfolios')->where('userId',$id)->get();
      
	   $portfolios=[];

       for($i=0;$i<count($p);$i++)
       {   $symbol=$p[$i]->portfolio;
       	  if($p[$i]->portfolio=="AC"){
       	     $row=DB::table('cements')->where('symbol',$symbol)->get();

       	     array_push($portfolios,$row[0]);
       	  }
       	  if($p[$i]->portfolio=="BWC"){
       	     $row=DB::table('cements')->where('symbol',$symbol)->get();
       	     array_push($portfolios,$row[0]);
       	  }
       	  if($p[$i]->portfolio=="BP"){
       	     $row=DB::table('chemicals')->where('symbol',$symbol)->get();
       	     array_push($portfolios,$row[0]);
       	  }
       	  if($p[$i]->portfolio=="DC"){
       	     $row=DB::table('chemicals')->where('symbol',$symbol)->get();
       	     array_push($portfolios,$row[0]);
       	  }

       }
       return compact('portfolios');

	}
	public function addPortfolio(Request $request){
            $check=0;
            $id=Auth::user()->id;
            $existingPortfolio=Portfolio::select('portfolio')->where('userId',$id)->get();
            for($i=0;$i<count($existingPortfolio);$i++)
            {
                  if($existingPortfolio[$i]->portfolio==$request->portfolio)
                  {
                        $check++;
                  }
            }
            if($check==0){
                $portfolio=new Portfolio;
            $portfolio->userId=$id;
            $portfolio->portfolio=$request->portfolio;

            $portfolio->save(); 
             Session::flash('success','Share Added! ');
  
            }
            else
            {
              Session::flash('success','Share already exist');

            }

           
            return redirect()->route('portfolio');
     
            
  }
}
