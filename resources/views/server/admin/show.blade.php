@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
              <div class="container-fluid">
                     <div class="mb-2 row">
                            <div class="col-sm-6">
                                   <h1>Profile</h1>
                            </div>
                            <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                          <li class="breadcrumb-item active">User Profile</li>
                                   </ol>
                            </div>
                     </div>
              </div><!-- /.container-fluid -->
       </section>

       <!-- Main content -->
       <section class="content">
              <div class="container-fluid">
                     <div class="col-md-12">
                            <x-alerts.success />
                     </div>
                     <div class="row">
                            <div class="col-md-3">

                                   <!-- Profile Image -->
                                   <div class="card card-primary card-outline">
                                          <div class="card-body box-profile">
                                                 <div class="text-center">
                                                        <img class="profile-user-img img-fluid img-circle" src="{{asset('storage/uploads/'.$admin->passport) }}" alt="Examiner image">
                                                 </div>

                                                 <h3 class="text-center profile-username">{{ $admin->name }}</h3>

                                                 <p class="text-center text-muted">{{ auth()->user()->roles[0]['name'] }}</p>

                                                 <ul class="mb-3 list-group list-group-unbordered">
                                                        <li class="list-group-item">
                                                               <b>Email</b> <a class="float-right">{{ $admin->email }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                               <b>Phone</b> <a class="float-right">{{ $admin->phone }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                               <b>Date</b> <a class="float-right">{{ $admin->created_at->diffForHumans() }}</a>
                                                        </li>
                                                 </ul>

                                                 <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                          </div>
                                          <!-- /.card-body -->
                                   </div>
                                   <!-- /.card -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                                   <div class="card">
                                          <div class="p-2 card-header">
                                                 <ul class="nav nav-pills">
                                                        <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                                 </ul>
                                          </div><!-- /.card-header -->
                                          <div class="card-body">
                                                 <div class="tab-content">

                                                        <!-- /.tab-pane -->
                                                        <div class="active tab-pane" id="timeline">
                                                               <!-- The timeline -->
                                                               <div class="timeline timeline-inverse">
                                                                      <!-- timeline time label -->
                                                                      <div class="time-label">
                                                                             <span class="bg-danger">
                                                                                    10 Feb. 2014
                                                                             </span>
                                                                      </div>
                                                                      <!-- /.timeline-label -->
                                                                      <!-- timeline item -->
                                                                      <div>
                                                                             <i class="fas fa-envelope bg-primary"></i>

                                                                             <div class="timeline-item">
                                                                                    <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                                                    <div class="timeline-body">
                                                                                           Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                                                           weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                                                           jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                                                           quora plaxo ideeli hulu weebly balihoo...
                                                                                    </div>
                                                                                    <div class="timeline-footer">
                                                                                           <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                                                           <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                                                    </div>
                                                                             </div>
                                                                      </div>
                                                                      <!-- END timeline item -->
                                                                      <!-- timeline item -->
                                                                      <div>
                                                                             <i class="fas fa-user bg-info"></i>

                                                                             <div class="timeline-item">
                                                                                    <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                                                    <h3 class="border-0 timeline-header"><a href="#">Sarah Young</a> accepted your friend request
                                                                                    </h3>
                                                                             </div>
                                                                      </div>
                                                                      <!-- END timeline item -->
                                                                      <!-- timeline item -->
                                                                      <div>
                                                                             <i class="fas fa-comments bg-warning"></i>

                                                                             <div class="timeline-item">
                                                                                    <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                                                    <div class="timeline-body">
                                                                                           Take me to your leader!
                                                                                           Switzerland is small and neutral!
                                                                                           We are more like Germany, ambitious and misunderstood!
                                                                                    </div>
                                                                                    <div class="timeline-footer">
                                                                                           <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                                                    </div>
                                                                             </div>
                                                                      </div>
                                                                      <!-- END timeline item -->
                                                                      <!-- timeline time label -->
                                                                      <div class="time-label">
                                                                             <span class="bg-success">
                                                                                    3 Jan. 2014
                                                                             </span>
                                                                      </div>
                                                                      <!-- /.timeline-label -->
                                                                      <!-- timeline item -->
                                                                      <div>
                                                                             <i class="fas fa-camera bg-purple"></i>

                                                                             <div class="timeline-item">
                                                                                    <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                                                                    <div class="timeline-body">
                                                                                           <img src="http://placehold.it/150x100" alt="...">
                                                                                           <img src="http://placehold.it/150x100" alt="...">
                                                                                           <img src="http://placehold.it/150x100" alt="...">
                                                                                           <img src="http://placehold.it/150x100" alt="...">
                                                                                    </div>
                                                                             </div>
                                                                      </div>
                                                                      <!-- END timeline item -->
                                                                      <div>
                                                                             <i class="far fa-clock bg-gray"></i>
                                                                      </div>
                                                               </div>
                                                        </div>
                                                        <!-- /.tab-pane -->

                                                        <div class="tab-pane" id="settings">
                                                               <form class="form-horizontal" action="{{ route('admin-update', $admin->id) }}" method="post">
                                                                      @csrf
                                                                      {{ method_field('PATCH') }}
                                                                      <div class="form-group row">
                                                                             <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                                             <div class="col-sm-10">
                                                                                    <input type="text" name="name" value="{{ $admin->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                                                                                    @error('name')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                           <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                             </div>
                                                                      </div>
                                                                      <div class="form-group row">
                                                                             <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                                             <div class="col-sm-10">
                                                                                    <input type="email" name="email" value="{{ $admin->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email address">
                                                                                    @error('email')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                           <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                             </div>
                                                                      </div>
                                                                      <div class="form-group row">
                                                                             <label for="inputName2" class="col-sm-2 col-form-label">Phone</label>
                                                                             <div class="col-sm-10">
                                                                                    <input type="test" name="phone" value="{{ $admin->phone }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
                                                                                    @error('phone')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                           <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                             </div>
                                                                      </div>
                                                                      <div class="form-group row">
                                                                             <div class="offset-sm-2 col-sm-10">
                                                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                                             </div>
                                                                      </div>
                                                               </form>
                                                        </div>
                                                        <!-- /.tab-pane -->
                                                 </div>
                                                 <!-- /.tab-content -->
                                          </div><!-- /.card-body -->
                                   </div>
                                   <!-- /.nav-tabs-custom -->
                            </div>
                            <!-- /.col -->
                     </div>
                     <!-- /.row -->
              </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
@endsection
