


















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
          
      </div>
        
        </div>
        <div class="row">
        
          <div class="col-lg-6 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">
               
            

                <form method="POST" action="{{ route('login') }}" >
                    @csrf
                  
                    <div      data-aos="fade-up" data-aos-delay="100" class="form-group">

                        <label for="vat" class=" form-control-label">{{ __('E-Mail Address') }}<span class="text-danger">*</span></label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                       
                        </div>


                        <div      data-aos="fade-up" data-aos-delay="100" class="form-group">


                            <label for="password" >{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>   


                        
                        <div      data-aos="fade-up" data-aos-delay="100" class="form-group">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                        </div>   


                        <div      data-aos="fade-up" data-aos-delay="100" class="form-group">

                        </div> 



                        <div      data-aos="fade-up" data-aos-delay="100" class="form-group">

                        </div> 


                        <div      data-aos="fade-up" data-aos-delay="100" class="form-group">

                        </div> 


    
                       




                        
                        



                            
                       
    


             

                   
            </div>


          </div>
     
        </div>
      </div>
    </div>

    

    <center>
    
       
    <center>
    
      <p style="margin-top:10px" data-aos="fade-up" data-aos-delay="300"><button style="background-color:#33E0FF;" type="submit" class="btn py-3 px-5 btn-pill">      {{ __('Login') }}   </button>
        @if (Route::has('password.request'))
        <a  href="{{ route('password.request') }}" class="btn btn-success py-3 px-5 btn-pill">      {{ __('Forgot Your Password?') }}</a>

    
                                        
        @endif
    </p>
    
     
    </center>   
      
       
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
