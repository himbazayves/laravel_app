
@extends('layouts.master')
@section('content')
    


<div class="col-lg-4">
    
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


<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
    <span class="badge badge-pill badge-success">Success</span>
    Conglatulations you have done your test.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    <div class="au-card m-b-30">
        <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
            <div class="bg-overlay bg-overlay--blue"></div>
            <h3>
                <i class="far fa-books-medical"></i>Ibisubizo </h3>
            
        </div>
        
        <div class="au-card-inner">

            

            <div class ="alert-danger" role="alert">

                <p> <i class="fas fa-exclamation-triangle"></i> Dukurikije amakuru mwatanza izi nizo nama tubagira </p>
              </div>

       
            
            <div class="chickyboxes">
                   


                    <div class="card-body">


                        <P>
                 
                          <p> <h5> stiuation </h5>
                            
                            
                            <div class="alert alert-success" role="alert"> LOW </div>
            
                        </p>


                        <hr>


                        
                        <div>
                 
                             <h5> Inama </h5>
                              
                              
                              <div class="alert alert-light"> 





                                <p> We are living extra ordinary times due to covid the COVID-19 outbreak</p>
                            <hr class="bg-dark text-dark">
                            <p class="mb-0"> The best way to keep you and your family health and help the community is being informed and help stop the spread further .</p>
                              </div>
              
                        </div>



                   

              
                  

                    </div>


                    
                <a href="{{route('process.auth')}}" class="au-btn au-btn-icon au-btn--green btn btn-outline-sucess btn-block">
                      Tangira   </a>
                   

                        <button type="submit" class="au-btn au-btn-icon au-btn--green btn btn-outline-sucess btn-block">
                            Reba inama  </button>
                       
                   


                   <div style="margin-top:20px" class="alert alert-light" role="alert">
                     <center class="text-primary">  Powered by  <img style="height:60px;width:60px" src="images/logo.jpg"><strong> Rurarera inc <strong></center>
                     </div> 
                        
                   
                        
            </div>
        </div>
    </div>
</div>

@endsection

