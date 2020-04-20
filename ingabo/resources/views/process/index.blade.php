




















      @extends('layouts.master')
      @section('content')
          
      <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
        <div class="site-wrap">
      
          <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            <div class="site-mobile-menu-body"></div>
          </div>
         
          
          <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            
            <div class="container-fluid">
              <div class="d-flex align-items-center">
                <div class="site-logo mr-auto w-25"><a href="index.html">INGABO</a></div>
      
                <div class="mx-auto text-center">
                  <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                      
                    </ul>
                  </nav>
                </div>
      
                <div class="ml-auto w-25">
                  <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                      <li class="nav-item"><a href="lang/kiny" class="nav-link"><img style=" height:15px;width:20px" src="images/kiny.jpg"></a><a href="lang/en" class="nav-link"><img style=" height:15px;width:20px" src="images/ng.jpg"></a><a href="lang/fr" class="nav-link"><span><img style=" height:15px;width:20px" src="images/fr.jpg"></span></a></li>
                      
                    </ul>
                  </nav>
                  <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
                </div>
              </div>
            </div>
            
          </header>
      
          
          <div class="site-section courses-title" id="courses-section">
            <div class="container">
              <div class="row mb-5 justify-content-center">
                
              </div>
            </div>
          </div>
          <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
            <div class="container">
              <div class="row">
      
                <div class="owl-carousel col-12 nonloop-block-14">
      
                  <div class="course bg-white h-100 align-self-stretch">
                    
                    <div class="course-inner-text py-4 px-4">
                      
                    
                      <h3><a href="#">{{__('customlang.test')}}</a></h3>
                      <p>{{__('customlang.test_content')}} </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4">  <a href="{{route('process.welcome')}}" class="customPrevBtn btn btn-primary m-1">{{__('customlang.get_involved')}}</a></div>
                    
                    </div>
                  </div>
      
                  <div class="course bg-white h-100 align-self-stretch">
                   
                    <div class="course-inner-text py-4 px-4">
                     
                      
                      <h3><a href="/test-centers">{{__('customlang.center_title')}}</a></h3>
                      <p>{{__('customlang.center_content')}} </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><a  href="/test-centers" class="customPrevBtn btn btn-primary m-1">{{__('customlang.get_involved')}}</a></div>
                      
                    </div>
                  </div>
      
                 
      
                 
      
                  <div class="course bg-white h-100 align-self-stretch">
                  
                    <div class="course-inner-text py-4 px-4">
                     
                      
                      <h3><a href="#">{{__('customlang.tips_title')}}</a></h3>
                      <p>{{__('customlang.tips_content')}} </p>
                    </div>
                    <div class="d-flex border-top stats">
                      <div class="py-3 px-4"><a href="#" class="customPrevBtn btn btn-primary m-1">{{__('customlang.get_involved')}}</a></div>
                     
                    </div>
                  </div>
      
                </div>
      
               
      
              </div>
            
          </div>
      
      
          
        
          
          
      
      
      
          
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
        
          
        </div> <!-- .site-wrap -->
      
         
          
        
      
        
        @endsection  
      