
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
                                            <li class="list-inline-item">Emergency contacts</li>
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
                                                <th>Phone number</th>
                                              
                                                <th>E-mail</th>
                                                <th>Names</th>
                                                <th>Provider</th>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($details as $detail)
                                            <tr>
                                                <td>{{$detail->tel}}</td>
                                                <td>{{$detail->email}}</td>
                                                <td>{{$detail->name}}</td>
                                                <td> {{$detail->vistor->tel}}</td>
                                               
                                                
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>

                                    {!! $details->links() !!}
                                </div>
                                <!-- END DATA TABLE                  -->
                            </div>


                    </div>
                        
            </section>

            

            @endsection