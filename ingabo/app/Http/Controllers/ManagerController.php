<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vistor;

use App\Trial;
use App\Symptom;
use App\Detail;
use App\Travel_history;
use App\Contact_history;

use DB;

class ManagerController extends Controller
{
    //



   public function __construct()
   {
       $this->middleware('auth');
   }

   function index(Request $request){

    $vistor_number = Vistor::all()->count();


    return view('manager.index',compact('vistor_number'));
   }


   function vistor(){

    //$vistors = Vistor::all();

    $vistors = Vistor::withCount(['trials'])->latest()
    ->paginate(5);
    //return view('users', compact('users'));


    return view('manager.vistor',['vistors'=> $vistors])->with('i', (request()->input('page', 1) - 1) * 5);;
   

    
   }

   function trial($id){


    $vistor=Vistor::find($id);
    $trials= Trial::where('vistor_id', '=', $id)
   
    ->get();

    return view('manager.trial',['trials'=> $trials,'vistor'=> $vistor]);
   }


   function emergency(){
    
    $trials= Trial::all();

    return view('manager.emergency',['trials'=> $trials]);
   }

   function detail(){


    $details= Detail::latest()
    ->paginate(5);
    return view('manager.detail',['details'=>$details])->with('i', (request()->input('page', 1) - 1) * 5);
   }
}
