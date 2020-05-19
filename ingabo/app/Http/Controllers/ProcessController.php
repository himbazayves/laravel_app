<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Sector;
use App\Center;

class ProcessController extends Controller
{

       function index(){


              return view('process.index');
             }


             public function sector($id)
             {
                 //$userData['data'] = DB::table('sectors')
                 $userData['data']= Sector::where('district_id', '=', $id)
                
                 ->orderBy('name', 'asc')
                 ->get();
             
              echo json_encode($userData);
              exit;
             }
       

       function welcome(){


        return view('process.welcome');
       }

       function notice(){


        return view('process.notice');
       }

       function auth(){


              $districts=District::all();
              $sectors=Sector::all();


     

              return view('process.auth',['districts'=>$districts, 'sectors'=>$sectors]);
      


  
       }


       function symptom(){

        return view('process.symptom');
            
        }

       function travel_history(){


        return view('process.travel_history');
       }


       function contact_history(){


        return view('process.contact_history');
       }



       function details(){


        return view('process.details');


       }




       public function centers()
    {


       $centers=Center::all();
       $districts=District::all();
       




       return view('process.center',['centers'=>$centers,'districts'=>$districts]);
      
    }
}
