
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
        <div class="row mb-5 justify-content-center" data-aos="fade-left" data-aos-delay="100">
        
        </div>
        <div class="row">
        
          <div class="col-lg-6 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

                <form method="post" action="{{route('handle.notice')}}" >
                    @csrf
                    <div class="form-group">
                        <label for="vat" class=" form-control-label">Hitamo ururimi-Select the language-choisir la langue</label>
                        <center>
                        <div class="btn-group">
                           
                        <a class="nav-link"  href="lang/kiny" ><img style=" height:30px;width:35px" src="images/kiny.jpg"></a>
                        <a class="nav-link"  href="lang/en" > <img style="  height:30px;width:35px" src="images/ng.jpg"></a>
                        <a class="nav-link"  href="lang/fr">  <img style="  height:30px;width:35px" src="images/fr.jpg"></a>
                        
                          
                    
                    </div>
                </center>
                       
                    </div>
                  

                        
            </div>


          </div>
     
        </div>
      </div>
    </div>

    

<center>
    
    <p style="margin-top:10px" data-aos="fade-up" data-aos-delay="300"><button type="submit" class="btn btn-primary py-3 px-5 btn-pill">  <i class="fa fa-location-arrow"></i> &nbsp; Komeza-continue-proceed</button></p>
  
   
  </center>   
</form> 
    <footer class="footer-section bg-white">
      <div class="container">
    
        

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>

              <center class="text-primary " data-aos="fade-up" data-aos-delay="100" >  Powered by  <img style="height:60px;width:60px" src="images/logo.jpg"><strong> Rurarera inc <strong></center>
      
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>






  
    
@endsection

