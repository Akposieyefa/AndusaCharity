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
                                          <li class="breadcrumb-item active">Trustee Profile</li>
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
                                                        <img class="profile-user-img img-fluid img-circle" src="{{asset('storage/uploads/'.$trustee->passport) }}" alt="Examiner image">
                                                 </div>

                                                 <h3 class="text-center profile-username">{{ $trustee->name }}</h3>

                                                 <p class="text-center text-muted">{{ $trustee->occupation}}</p>

                                                 <ul class="mb-3 list-group list-group-unbordered">
                                                        <li class="list-group-item">
                                                               <b>Email</b> <a class="float-right">{{ $trustee->email }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                               <b>Phone</b> <a class="float-right">{{ $trustee->phone }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                               <b>Date</b> <a class="float-right">{{ $trustee->created_at->diffForHumans() }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                               <b>Address</b> <a class="float-right">{{ $trustee->address}}</a>
                                                        </li>
                                                 </ul>

                                                 <a href="#" class="btn btn-primary btn-block"><b>Contact</b></a>
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
                                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                                 </ul>
                                          </div><!-- /.card-header -->
                                          <div class="card-body">
                                                 <div class="tab-content">
                                                        <div class="active tab-pane" id="activity">
                                                               <!-- Post -->
                                                               <div class="post">
                                                                      <div class="user-block">
                                                                             <img class="img-circle img-bordered-sm" src="{{asset('storage/uploads/'.$trustee->passport) }}" alt="user image">
                                                                             <span class="username">
                                                                                    <a href="#">{{ $trustee->name }}</a>
                                                                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                                             </span>
                                                                             <span class="description">Joinied- {{ $trustee->created_at }}</span>
                                                                      </div>
                                                                      <!-- /.user-block -->
                                                                      <p>
                                                                             {!! $trustee->bio !!}
                                                                      </p>
                                                               </div>
                                                        </div>
                                                        <div class="tab-pane" id="settings">
                                                               <form class="form-horizontal" action="{{ route('trustee-update', $trustee->id) }}" method='post'>
                                                                      @csrf
                                                                      {{ method_field('PATCH') }}
                                                                      <div class="form-group row">
                                                                             <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                                             <div class="col-sm-10">
                                                                                    <input type="text" name="name" value="{{ $trustee->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
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
                                                                                    <input type="email" name="email" value="{{ $trustee->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email address">
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
                                                                                    <input type="test" name="phone" value="{{ $trustee->phone }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
                                                                                    @error('phone')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                           <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                             </div>
                                                                      </div>
                                                                      <div class="form-group row">
                                                                             <label for="inputName2" class="col-sm-2 col-form-label">Occupation</label>
                                                                             <div class="col-sm-10">
                                                                                    <input type="test" name="occupation" value="{{ $trustee->occupation }}" class="form-control @error('occupation') is-invalid @enderror" placeholder="Enter occupation">
                                                                                    @error('occupation')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                           <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                             </div>
                                                                      </div>
                                                                      <div class="form-group row">
                                                                             <label for="inputName2" class="col-sm-2 col-form-label">Address</label>
                                                                             <div class="col-sm-10">
                                                                                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter address">{{ $trustee->address }}</textarea>
                                                                                    @error('address')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                           <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                             </div>
                                                                      </div>
                                                                      <div class="form-group row">
                                                                             <label for="inputName2" class="col-sm-2 col-form-label">Biography</label>
                                                                             <div class="col-sm-10">
                                                                                     <textarea name="bio" class="textarea @error('bio') is-invalid @enderror" placeholder="Enter blog body" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $trustee->bio }}</textarea>
                                                                                    @error('bio')
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

