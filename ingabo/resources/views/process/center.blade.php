



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
        
          <div class="col-lg-12 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">
            <center>
    
                <p style="margin-top:10px" data-aos="fade-up" data-aos-delay="300"><a href="/" class="btn btn-primary py-3 px-5 btn-pill">   {{__('customlang.back')}}</a></p>
              
               
              </center>   

            <div class="p-4 rounded bg-white why-choose-us-box">

              
               
                        <select id="mylist" onchange="myFunction()" class='form-control js-example-basic-single'>
                            <option value=""> {{__('customlang.select_here')}}</option>
                    
                            @foreach($districts as $district)
                        <option>{{$district->name}}</option>
                        @endforeach   
                        </select> 
                     
                            <table  class="table table-striped table-sm table-hover table-borderless"  id="myTable" >
                                <thead>
                    <tr>
                                   
                                    <th >Center name</th>
                                    <th >District</th>
                                    <th >Contact</th>
                                   
                                
                           
                    </tr>        
                                </thead>
                                <tbody>
                                    @foreach($centers as $center)
                                    <tr>
                                      
                                        <td >{{$center->name}}</td>
                                        <td >{{$center->District->name}}</td>
                                        <td >{{$center->contact}}</td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
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






  
    
@endsection




