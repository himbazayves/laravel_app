




















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
        <div class="alert alert-success" role="alert">
          <center> {{__('customlang.feedback') }}</center>

        </div>
        
        </div>
        <div class="row">
        
          <div class="col-lg-6 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">
               
            

             
              <P>

                @if($result==0)

                <div class="alert alert-success" role="alert"> {{__('customlang.f_normal') }}</div>
                @else
                <div class="alert alert-danger" role="alert"> {{__('customlang.f_severe') }}</div>
                @endif
               
                  
                  
                
  
              




              
              
       
                  <hr> 
                    
                    
                    <div class="alert alert-light"> 



                     <p> {{__('customlang.f_p')}} :</p>


                     <p>  
                       <table>
                         <tr>
                      <td> <h5><strong>Phone:</strong></h5>  </td> <td> <h5><strong> 114</strong> </h5></td>

                         </tr>
                        <tr>
                          <td><h5><strong>WhatsAPP: </strong></h5>  </td> <td> <h5><strong>+250  788 202 080 </strong> </h5></td>

                        </tr>

                        <tr>
                          <td><h5><strong>E-mail: </strong></h5>  </td> <td> <h5><strong>callcenter@rbc.gov.rw</strong></h5></td>

                        </tr>
                       </table>
                         <h5>{{__('customlang.or')}} </h5>
                        
                         <table>
                         
                         @foreach($center->centers as $value)
                         <tr>
                        <td> <h5><strong> {{$value->name}}  </h5></strong></td> <td><h5><strong> :{{$value->contact}} </strong></h5> </td>
                        </tr>
                        
                    @endforeach
                  </table>
                    </p>
                    

                 

         
                         
                  
                       
              
              </div>
    
              </div>



         

    
        
             

                   
            </div>


          </div>
     
        </div>
      </div>
    </div>

    

    <center>
    
        <p style="margin-top:10px"><a href="{{route('process.auth')}}" class="btn btn-success py-3 px-5 btn-pill">       {{__('customlang.restart')}}</a> <a href="/" class="btn btn-light py-3 px-5 btn-pill">       {{__('customlang.home')}}</a><button type="submit" class="btn btn-primary py-3 px-5 btn-pill">     {{__('customlang.f_tips')}}   </button></p>
      
       
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








