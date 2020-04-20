
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
                                            <li class="list-inline-item">Vistor list</li>
                                        </ul>
                                    </div>
                                    <a href=" {{route('manager.index')}}"class="au-btn au-btn-icon au-btn--green">
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
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Contact</th>
                                                <th>Test date Date</th>
                                              
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($trials as $trial)
                                            <tr>

                                                  
                                              @endforeach
                                                <td>{{$trial->vistor->tel}}</td>
                                                <td>{{$trial->created_at}}</td>
                                                
                                               
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