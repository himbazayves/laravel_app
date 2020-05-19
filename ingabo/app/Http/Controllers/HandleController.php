<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vistor;

use App\Trial;
use App\Symptom;
use App\Detail;
use App\Travel_history;
use App\Contact_history;
use App\Sector;
use App\District;

use DB;

class HandleController extends Controller

{

    function notice(Request $request){


        return redirect()->route('process.notice');
    }
    function auth(Request $request){


        $request->validate(['tel' => 'required',]);

       
        $tel=$request->input('tel');
      
       //$tel=preg_replace('/\s+/', '', $tel);

        $request->session()->put('tel',$tel);


        //-------------------------------------------------
        // $trials = Vistor::where('tel', '=', $tel)->count();
        
        //if($trials < 1){


            //$trial=1;
            //$request->session()->put('trial',$trial);
            //$request->session()->put('tel',$tel);
            
        //}

        //else { 
            
        //$current_trial= Trial::where('vistor_id', '=', $tel)
        //->latest()
        //->first('id');
        
        //$current_trial =  $current_trial['id'];
       

        //$next_trial=$current_trial+1;
        //$next_trial;
        //$check_trials = Trial::where('id', '=',  $next_trial)->count();

        //if ( $check_trials < 1){

           // $request->session()->put('trial',$next_trial);
            
            

       // }


       //};

       //--------------------------------------------------------------

       //$birth=$request->input('date');
        $sector=$request->input('sector');
        $district=$request->input('district');
 

        if($sector==""){
          

            $sector_name="";
            $dis_name="";
        }

        else{


  
           $district=District::find($district);
           
           $sector_name= $sector;
           $district_id= $district->id;
           $request->session()->put('$district_id',$district_id);
            
           $dis_name= $district->name;
           
           
        }



     
        $request->session()->put('tel',$tel);
       // $request->session()->put('birth',$birth);
           $request->session()->put('sector',$sector_name);
           $request->session()->put('district',$dis_name);

         // echo $request->session()->get('district');

        // echo  $request->session()->get('sector');
      
              

       
        
        
        
        
       



         //$trial= DB::table("vistors")->where('tel', '=', $tel);

        //$trial = Students::where('tel', '=', 'John Doe')->first();
        
       // $check_friend_request = DB::table("friend_requests")
//->where("request_sent_by_id", Auth::user()->user_id && "request_sent_to_id", $curUserID[1]);

return redirect()->route('process.symptom');
    }


    function symptom(Request $request){


        $symptom=$request->input('symptom');

        $request->session()->put('symptoms',$symptom);

        // saving symptoms -------------------------------
       // $symptoms=$request->session()->get('symptoms');
        //foreach($symptoms as $s){
           // $S= new Symptom;

            //$S->symptom= $s;
           // $S->trial_id=  $request->session()->get('trial');
           // $S->vistor_id= $request->session()->get('tel');
           // $S->save();
       // }

       //----------------------------------------------------------



       return redirect()->route('process.travel_history');


    }

    function travel(Request $request){

        $request->validate(['travel_history' => 'required',]);
       $travel_history= $request->input('travel_history');


       $request->session()->put('travel_history',$travel_history);


       if($travel_history==1){

        $request->validate(['travel_history' => 'required',]);
        $request->validate(['country' => 'required',]);
        $request->validate(['accompany' => 'required',]);
        $request->validate(['living' => 'required',]);


        $country= $request->input('country');
        $living= $request->input('living');
        $accompany= $request->input('accompany');
        
        
        $request->session()->put('country',$country);
        $request->session()->put('living',$living);
        $request->session()->put('accompany',$accompany);
        return redirect()->route('process.contact_history');
       }

      else{

        $request->session()->put('living',0);
        $request->session()->put('accompany',0);
      
       
        return redirect()->route('process.contact_history');
      }

      return redirect()->route('process.contact_history');

    }

    function contact_history(Request $request){


        $request->validate(['contact_history' => 'required']);
        $contact_history=$request->input('contact_history');

        $request->session()->put('contact_history',$contact_history);
        $living=$request->session()->get('living');
        $accompany=$request->session()->get('accompany');

        $travel=$request->session()->get('travel_history');
       
       
        if( $living==1 or $accompany==1 ){


            return redirect()->route('process.details');
   
        }


      
       else {

        return redirect()->route('handle.final');
   

        }


    }

    function detail(Request $request){

      


        
        //$count=count($loop);
        //$trial_array=array();
        //$vistor_array=array();
         //$x=1;
         //while($x <= $count){
//   $vistor_array[] = $vistor_id;
            
          //  $trial_array[] = $trial_id;
       // $x++;
        //}
        
               
/////------------------ create details ---------------

        //foreach($loop as $key => $no)
        //{
         
           
           // $input['trial_id'] =$trial_array[$key];
           // $input['vistor_id'] =$vistor_array[$key];
         //$input['name'] = $name[$key];
        //$input['email'] = $email[$key];
        //$input['tel'] = $tel[$key];
           
            

           //Detail::create($input);

        
       // }


  //--------------------------------     
        
// ending the process



$tel=$request->session()->get('tel');
$check_vistor = Vistor::where('tel', '=', $tel)->count();

if($check_vistor < 1){
$tel=$request->session()->get('tel');

$vistor=new Vistor;

$vistor->tel=$tel;

$vistor->sector=$request->session()->get('sector');
$vistor->district=$request->session()->get('district');
$vistor->birth=$request->session()->get('birth');

$vistor->save();





$vistor_id= Vistor::where('tel', '=', $tel)
->latest()
->first('id');
        


$vistor_id =  $vistor_id['id'];

}



else {


    $vistor_id= Vistor::where('tel', '=', $tel)
        ->first()->id;

        
      
}



$trial_id=mt_rand();

echo $trial_id;

$check_trial_id=Trial::where('id', '=', $trial_id)->count();

if($check_trial_id < 1)


{



 $trial_id=$trial_id;

}

else {

 while($check_trial_id >= 1) {
        $check_trial_id=mt_rand();
        $check_trial_id=Trial::where('id', '=', $trial_id)->count();
    
       
           }
    
    

    $trial_id=$trial_id;

}



$new_trial = new Trial;

$new_trial->id=$trial_id;

$new_trial->vistor_id=$vistor_id;
$new_trial->save();


$count_symptom=0;

$symptoms=$request->session()->get('symptoms');

//----
foreach($symptoms as $s){
$count_symptom++;
$S= new Symptom;

$S->symptom= $s;
$S->trial_id=  $trial_id;
$S->vistor_id= $vistor_id;
$S->save();
       }

$request->session()->put('count_symptom',$count_symptom);
      

       $contact =new Contact_history;


       $contact->contact_history= $request->session()->get('contact_history');
       $contact->trial_id=$trial_id;
       $contact->vistor_id=$vistor_id;
       $contact->save();
       if ($request->session()->get('living')==1 or $request->session()->get('accompany')==1){



        $tel = $request->tel;
        $name = $request->name;
        $email= $request->email;
        $loop= $request->loop;
       
      
        $count=count($loop);
        $trial_array=array();
        $vistor_array=array();
         $x=1;
         while($x <= $count){
    
            $vistor_array[] = $vistor_id;
            
            $trial_array[] = $trial_id;
        $x++;
        }
        
               
    
    
        foreach($loop as $key => $no)
        {
         
           
            $input['trial_id'] =$trial_array[$key];
            $input['vistor_id'] =$vistor_array[$key];
         $input['name'] = $name[$key];
        $input['email'] = $email[$key];
        $input['tel'] = $tel[$key];
           
            
    
           Detail::create($input);
    
        
       }
    }      





 










   
    


  
    if( $request->session()->get('travel_history')==1){

        $travel= new Travel_history;
        $travel->trial_id=$trial_id;
        $travel->vistor_id=$vistor_id;
        $travel->travel_history= $request->session()->get('travel_history');
        $travel->living=$request->session()->get('living');
        $travel->accompany=$request->session()->get('accompany');
        $travel->country=$request->session()->get('country');
        $travel->save();
       
       }
      



      
      
    

       return redirect()->route('handle.feedback');





}


function final(Request $request){




    $tel=$request->session()->get('tel');
$check_vistor = Vistor::where('tel', '=', $tel)->count();

if($check_vistor <1){
$tel=$request->session()->get('tel');

$vistor=new Vistor;

$vistor->tel=$tel;

$vistor->sector=$request->session()->get('sector');
$vistor->district=$request->session()->get('district');
$vistor->birth=$request->session()->get('birth');

$vistor->save();





$vistor_id= Vistor::where('tel', '=', $tel)
->latest()
->first('id');
        


$vistor_id =  $vistor_id['id'];

}



else {


    $vistor_id= Vistor::where('tel', '=', $tel)
    ->latest()
    ->first('id');
            
    
    
    $vistor_id =  $vistor_id['id'];

}









$trial_id=mt_rand();

echo $trial_id;

$check_trial_id=Trial::where('id', '=', $trial_id)->count();

if($check_trial_id < 1)


{



 $trial_id=$trial_id;

}

else {

 while($check_trial_id >= 1) {
        $check_trial_id=mt_rand();
        $check_trial_id=Trial::where('id', '=', $trial_id)->count();
    
       
           }
    
    

    $trial_id=$trial_id;

}



$new_trial = new Trial;

$new_trial->id=$trial_id;

$new_trial->vistor_id=$vistor_id;
$new_trial->save();

$count_symptom=0;

$count_s=$request->session()->get('symptoms');


 
if(!empty($count_s)) 
$symptoms=$request->session()->get('symptoms');
{
foreach($count_s as $s){
    $count_symptom++;
$S= new Symptom;


$S->symptom= $s;
$S->trial_id=  $trial_id;
$S->vistor_id= $vistor_id;
$S->save();
       }
    }

//    $symptoms=$request->session()->get('symptoms');

//$count_symptom=0;
//foreach($symptoms as $s){
//$count_symptom++;
//$S= new Symptom;

//$S->symptom= $s;
//$S->trial_id=  $trial_id;
//$S->vistor_id= $vistor_id;
//$S->save();
   //    }
      

       $contact =new Contact_history;


       $contact->contact_history= $request->session()->get('contact_history');
       $contact->trial_id=$trial_id;
       $contact->vistor_id=$vistor_id;
       $contact->save();
       



 










   
    


  
    if( $request->session()->get('travel_history')==1){

        $travel= new Travel_history;
        $travel->trial_id=$trial_id;
        $travel->vistor_id=$vistor_id;
        $travel->travel_history= $request->session()->get('travel_history');
        $travel->living=$request->session()->get('living');
        $travel->accompany=$request->session()->get('accompany');
        $travel->country=$request->session()->get('country');
        $travel->save();
       
       }
      



      
      
    

       return redirect()->route('handle.feedback');














}




function feedback(Request $request){


    $district_id=$request->session()->get('$district_id');
    $center=District::find($district_id);
    
    if( $request->session()->get('travel_history')==1 or $request->session()->get('contact_history')==1 )
    { 
        
        $result=1;
    }
  elseif($request->session()->get('count_symptom') >3 ){


    echo "symptoms :" .$request->session()->get('count_symptom');
    $result=1;
  }

  else{
    $result=0;

  }
    return view('handle.feedback',['center'=> $center],['result'=> $result]);
   }



}








