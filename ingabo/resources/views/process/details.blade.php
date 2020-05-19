
















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
            <center>{{__('customlang.d_head')}}</center>
           </div>
        
        </div>
        <div class="row">
        
          <div class="col-lg-6 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">
               
            
                <form  method="post" action="{{route('handle.detail')}}">
                    @csrf
    
                       
    
                     
    
                    
                        <span id="error"></span>
                        <table class="table " id="item_table">


                         
                         

                          <div class="form-group">
                         
                            <button type="button" name="add" class="btn btn-success btn-sm add"><i class="fa fa-plus"></i></button>
                          </div>
                         
                        

                         <input  type="hidden" value="1" name="loop[]"/>
                      

                         <div class="form-group">
                         <input placeholder="{{__('customlang.d_name')}}" type="text" class="form-control " name="name[]"  /> 
                         </div>

              
                         <div class="form-group">
                         <input placeholder="{{__('customlang.d_email')}}" name="email[]" class="form-control " /></td>
                        </div>

                         <div class="form-group">
                         <input type="text" placeholder="{{__('customlang.d_phone')}}" name="tel[]" class="form-control " />
                        </div>


                       
                      
                      
                      </table>
                    
                        
                    
                    
             

             

                   
            </div>


          </div>
     
        </div>
      </div>
    </div>

    

    <center>
    
        <p style="margin-top:10px" data-aos="fade-up" data-aos-delay="300"><a href="/contact-history" class="btn btn-success py-3 px-5 btn-pill">       {{__('customlang.back')}}</a><button type="submit" class="btn btn-primary py-3 px-5 btn-pill">     {{__('customlang.proceed')}}   </button></p>
      
       
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






