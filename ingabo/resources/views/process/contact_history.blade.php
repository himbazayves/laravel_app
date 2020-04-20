














@extends('layouts.master')
@section('content')
    



<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    

    
    

    
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
          <div class="alert alert-success">
           <center> {{__('customlang.c_head')}}</center>
          </div>
        
        </div>
        <div class="row">
        
          <div class="col-lg-6 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">
               
            
                <form method="post" action="{{route('handle.contact_history')}}">
                    @csrf
    
    
    
    
    
                      <label   for="travel_history">{{__('customlang.c_p1')}}?</label>
                        
                      <section class="light">
    
                          
                        
                         
                        
                          <label>
                          <input class="input" id="myCheck" onclick="myFunction()" value="1" name="contact_history" type="radio" name="light">
                            <span class="design"></span>
                            <span class="text">{{__('customlang.yes')}}</span>
                          </label>
                        
                          <label>
                            <input class="input" value="0" onclick="myFunction()" id="unCheck" type="radio" name="contact_history" >
                            <span class="design"></span>
                            <span class="text">{{__('customlang.no')}}</span>
                          </label>
    
    
                          
              
     
    
                       
    

             

                   
            </div>


          </div>
     
        </div>
      </div>
    </div>

    

    <center>
    
        <p style="margin-top:10px" data-aos="fade-up" data-aos-delay="300"><a href="/travel-history" class="btn btn-success py-3 px-5 btn-pill">       {{__('customlang.back')}}</a><button type="submit" class="btn btn-primary py-3 px-5 btn-pill">     {{__('customlang.proceed')}}   </button></p>
      
       
      </center>   
    
     
    <footer class="footer-section bg-white">
      <div class="container">
    
        

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
             
                    <center class="text-primary">  Powered by  <img style="height:60px;width:60px" src="images/logo.jpg"><strong> Rurarera inc <strong></center>
                       
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    


    

@endsection






