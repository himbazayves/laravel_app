





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
      <div data-aos="fade-down" data-aos-delay="100" class="container">
        <div  class="alert alert-success">
            <center> {{__('customlang.m_head')}}</center>
 
       </div>
        
        </div>
        <div class="row">
        
          <div class="col-lg-6 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">
            <div class="chickyboxes ">

            <div class="p-4 rounded bg-white why-choose-us-box">
               
            
               
             
                <form method="post" action="{{route('handle.symptom')}}" >
                    @csrf
                   
                   
                
                    <div data-aos="fade-up" data-aos-delay="100" >
                    <img style=" height:80px; width:80px" src="images/c.jpg">
                    <input style="font-size:1.2rem" name="symptom[]" value="Cough" type="checkbox" id="cough">
                        <label  class="text-dark" for="cough">  <strong>{{__('customlang.cough')}} <strong></label>
                    </div>

                    <div data-aos="fade-up" data-aos-delay="100" >

                      <hr>       
                


                      <img style=" height:80px; width:80px" src="images/fever.jpg">
                      <input style="font-size:1.2rem" name="symptom[]" value="Fever" type="checkbox" id="fever">
                          <label  class="text-dark" for="fever">  <strong>{{__('customlang.fever')}}<strong></label>

                          </div>
                          <div data-aos="fade-up" data-aos-delay="100" >

                            <hr>       
                


                            <img style=" height:80px; width:80px" src="images/sore.jpg">
                            <input style="font-size:1.2rem" name="symptom[]" value="Sore Stroad" type="checkbox" id="sore">
                                <label  class="text-dark" for="sore">  <strong>{{__('customlang.sore')}} <strong></label>



                          </div>
                          <div data-aos="fade-up" data-aos-delay="100" >
                                    
                            <hr>       
                


                            <img style=" height:80px; width:80px" src="images/breath.jpg">
                            <input style="font-size:1.2rem" name="symptom[]" value="Breath shortage" type="checkbox" id="breath">
                                <label  class="text-dark" for="breath">  <strong>{{__('customlang.breath')}}<strong></label>


                                </div>

                                <div data-aos="fade-up" data-aos-delay="100" >
                                    
                            <hr>       
                


                            <img style=" height:80px; width:80px" src="images/headache.jpg">
                            <input style="font-size:1.2rem" name="symptom[]" value="cough" type="checkbox" id="headache">
                                <label  class="text-dark" for="headache">  <strong>{{__('customlang.headache')}} <strong></label>
                    </div>
                  
                </div>

                    
             

                   
            </div>

        </div>
          </div>
     
        </div>
      </div>
    </div>

    

    <center>
    
        <p data-aos="fade-up" data-aos-delay="300"><a href="/auth" class="btn btn-success py-3 px-5 btn-pill">       {{__('customlang.back')}}</a><button type="submit" class="btn btn-primary py-3 px-5 btn-pill">     {{__('customlang.proceed')}}   </button></p>
      
       
      </center>   
    </form>

     
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




  
