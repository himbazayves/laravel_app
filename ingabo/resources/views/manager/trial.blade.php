
@extends('layouts.manager')
@section('content')
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Dashboard</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item"> vistors</li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>

                                            <li class="list-inline-item seprate">
                                                <span>Vistor Trials</span>
                                            </li>
                                        </ul>
                                    </div>
                                <a href=" {{route('manager.vistor')}}"class="au-btn au-btn-icon au-btn--green">
                                        <<<<<< Back </a>
                                
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

           
            <section style="margin:30px">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-md-12">
                                <p> 
                                    
                                    

                                  <div class="alert alert-warning" rolre="alert"> Trial(s) for: <strong> {{$vistor->tel}} </strong>
                                  </div>  
                              
                                </p>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Symptoms</th>
                                                <th>Travel History</th>
                                               
                                              
                                              
                                                <th>Contact history</th>
                                                <th>Status</th>

                                              
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                {{ $count=1;
                                                    $symptom_count=0;
                                                
                                                }}
                                                
                                            @endphp
                                            @foreach($trials as $trial)
                                            <tr>
                                                <td>{{$count++}}</td>
                                                <td>
                                              
                                                    <ul class="list-group list-group-flush">
                                                    @foreach($trial->symptoms as $s)

                                                    @php
                                                    {{ 
                                                       $symptom_count++;
                                                    
                                                    }}
                                                    
                                                @endphp

                                                   
                                                        <li class="list-group-item">{{ $s->symptom }}</li>
                                                      
                                                     

                                                    
                                            
                                                @endforeach
                                            
                                            </ul>
                                                 </td>



                                                
                                               
                                                 <td>
                                              
                                                    
                                                    @foreach($trial->travel_histories as $t)


                                                       @php
                                                           {{ if ($t->travel_history==1){


                                                            $trials="YES";
                                                           }
                                                        else{

                                                            $trials="NO";
                                                        }
                                                        
                                                        }}
                                                       @endphp
                                                   {{ $trials}}
                                                      
                                                     

                                                    
                                            
                                                @endforeach
                                        
                                                 
                                                
                                                
                                                
                                                
                                                </td>



                                                <td>
                                              
                                                    
                                                    @foreach($trial->contact_histories as $c)


                                                       @php
                                                           {{ if ($s->contact_history==1){


                                                            $contact="YES";
                                                           }
                                                        else{

                                                            $contact="NO";
                                                        }
                                                        
                                                        }}
                                                       @endphp
                                                   {{ $contact}}
                                                      
                                                     

                                                    
                                            
                                                @endforeach

                                                <td>

                                                  @php
                                                      {{ if($symptom_count>3 )
                                                    
                                                         {
                                                        
                                                        $status=1;
                                                        } 
                                                    
                                                            elseif($trials=="YES" or $contact=="YES"){
                                                                $status=1;
                                                                
                                                                } 

                                                      else{

                                                        $status=0;

                                                      } ;
                                                      
                                                      
                                                      if($status==1){

                                                        echo"<div class='text-danger'> Danger </div>";
                                                      }

                                                      else{

                                                        echo"<div class='text-success'> Low </div>";
                                                      }
                                                    
                                                    }}
                                                  @endphp

                                                </td>
                                        
                                                 
                                                
                                                
                                                
                                                
                                                </td>

                                         
                                         
                                          
                                        
                                             
                                                
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>

                                   
                                </div>
                                <!-- END DATA TABLE                  -->
                            </div>


                    </div>
                        
            </section>

            

            @endsection