@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
              <div class="container-fluid">
                     <div class="mb-2 row">
                            <div class="col-sm-6">
                                   <h1 class="m-0 text-dark">Dashboard</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Dashboard </li>
                                   </ol>
                            </div><!-- /.col -->
                     </div><!-- /.row -->
              </div><!-- /.container-fluid -->
       </div>
       <!-- /.content-header -->

       <!-- Main content -->
       <section class="content">
              <div class="container-fluid">
                     <!-- Small boxes (Stat box) -->
                     <div class="row">
                            <div class="col-lg-3 col-6">
                                   <!-- small box -->
                                   <div class="small-box bg-info">
                                          <div class="inner">
                                                 <h3>{{ adminCount() }}</h3>

                                                 <p>Administrators</p>
                                          </div>
                                          <div class="icon">
                                                 <i class="fas fa-user-secret"></i>
                                          </div>
                                          <a href="{{ route('admins') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                   </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                   <!-- small box -->
                                   <div class="small-box bg-success">
                                          <div class="inner">
                                                 <h3>{{ contactCount() }}</h3>

                                                 <p>Messages</p>
                                          </div>
                                          <div class="icon">
                                                 <i class="fas fa-envelope "></i>
                                          </div>
                                          <a href="{{ route('contacts') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                   </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                   <!-- small box -->
                                   <div class="small-box bg-warning">
                                          <div class="inner">
                                                 <h3>{{ trusteeCount() }}</h3>

                                                 <p>Trustees</p>
                                          </div>
                                          <div class="icon">
                                                 <i class="ion ion-person-add"></i>
                                          </div>
                                          <a href="{{ route('trustees') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                   </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                   <!-- small box -->
                                   <div class="small-box bg-danger">
                                          <div class="inner">
                                                 <h3>{{ postCount() }}</h3>

                                                 <p>Posts</p>
                                          </div>
                                          <div class="icon">
                                                 <i class="ion ion-pie-graph"></i>
                                          </div>
                                          <a href="{{ route('posts') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                   </div>
                            </div>
                            <!-- ./col -->
                     </div>
                     <!-- /.row -->
                     <!-- Main row -->
                     <div class="row">
                            <!-- Left col -->
                            <section class="col-lg-12 connectedSortable">
                                   <!-- Custom tabs (Charts with tabs)-->
                                   <div class="card">
                                          <div class="card-header">
                                                 <h3 class="card-title">
                                                        <i class="mr-1 fas fa-chart-pie"></i>
                                                        Welcome : {{ auth()->user()->name }}
                                                 </h3>
                                          </div><!-- /.card-header -->
                                          <div class="card-body">
                                                 <div class="p-0 tab-content">
                                                        <div class="slider" id="main-slider">
                                                               <div class="slider-wrapper">
                                                                      <img src=" {{asset('images/gallery1.jpg')}} " alt="First" class="slide" />
                                                                      <img src=" {{asset('images/gallery2.jpg')}} " alt="Second" class="slide" />
                                                                      <img src=" {{asset('images/gallery3.jpg')}} " alt="Third" class="slide" />
                                                               </div>
                                                        </div>
                                                 </div>
                                          </div><!-- /.card-body -->
                                   </div>
                                   <!-- /.card -->
                                   <!-- /.card -->
                            </section>
                            <!-- /.Left col -->
                     </div>
                     <!-- /.row (main row) -->
              </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

<style type="text/css">
       /*start style for rollover image*/
       .card {
              border-left: 2px solid #bbb;
              border-right: 2px solid #bbb;
              border-top: 2px solid #bbb;
       }

       .card-heading {
              border: 0px solid #bbb;
              border-bottom: 2px solid #bbb;
              margin-bottom: 0px;
       }

       .card-body {
              margin-top: -5px;
       }

       .slider-wrapper {
              width: 100%;
              height: 350px;
              position: relative;
              margin-top: 5px;
              border-radius: 3px;
              margin-bottom: 5px;
       }

       .slide {
              float: left;
              position: absolute;
              width: 100%;
              height: 100%;
              opacity: 0;
              transition: opacity 3s linear;
       }

       .slider-wrapper>.slide:first-child {
              opacity: 1;
       }

       /*end style for rollover image*/

</style>
<script src="{{asset('assets/slide.js')}}"></script>

