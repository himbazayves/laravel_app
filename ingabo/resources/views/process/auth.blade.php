
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
           <center> {{__('customlang.a_head')}} </center>

      </div>
        
        </div>
        <div class="row">
        
          <div class="col-lg-6 ml-auto align-self-start card1"  data-aos="fade-down" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">
               
            

                <form method="post" action="{{route('handle.auth')}}" >
                    @csrf
                  
                    <div      data-aos="fade-up" data-aos-delay="100" class="form-group">

                        <label for="vat" class=" form-control-label">{{__('customlang.phone')}}<span class="text-danger">*</span></label>

                          <input type="number" placeholder="0788443600" name="tel" class="form-control" required> 
                       
                        </div>

    
                        <div data-aos="fade-up" data-aos-delay="100" class="form-group">

                          <label for="vat" class=" form-control-label">Akarere</label>
                          <select  class="js-example-basic-single form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" onchange="dropdown(this.value);" name="district" id="district" required>
                              <option value="" disabled selected hidden>{{__('customlang.select_district')}}</option>
                              @foreach ($districts as $value)
                          <option value="{{ $value->id }}">{{ $value->name}}</option>
                           @endforeach
  
                            </select>
                      
  
                         
                          </div>




                        
                        



                            
                        <div data-aos="fade-up" data-aos-delay="100" class="form-group">

                            <label for="vat" class=" form-control-label">{{__('customlang.sector')}}</label>
                            <select  class="js-example-basic-single form-control{{ $errors->has('sector') ? ' is-invalid' : '' }}" name="sector" id="sector" required>
                                <option value="" disabled selected hidden>{{__('customlang.select_sector')}}</option>
                            
                              </select>
                        
    
                           
                            </div>

    


             

                   
            </div>


          </div>
     
        </div>
      </div>
    </div>

    

    <center>
    
       
    <center>
    
      <p style="margin-top:10px" data-aos="fade-up" data-aos-delay="300"><a href="/notice" class="btn btn-success py-3 px-5 btn-pill">       {{__('customlang.back')}}</a><button style="background-color:#33E0FF;" type="submit" class="btn py-3 px-5 btn-pill">     {{__('customlang.proceed')}}   </button></p>
    
     
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

  
    


    

    <script >
      function dropdown(msg){
          var district=msg;
          $.ajax({
         url: 'getsector/'+district,
         type: 'get',
         dataType: 'json',
         success: function(response){
              $("#sector").empty(); 
  
           var len = 0;
           if(response['data'] != null){
             len = response['data'].length;
           }
           if(len > 0){
             // Read data and create <option >
             for(var i=0; i<len; i++){
  
               var id = response['data'][i].id;
               var name = response['data'][i].name;
  
               var option = "<option value='"+name+"'>"+name+"</option>"; 
  
               $("#sector").append(option); 
             }
           }
  
         }
      });
      }
 </script>



  
@endsection
