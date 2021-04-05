@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
              <div class="container-fluid">
                     <div class="mb-2 row">
                            <div class="col-sm-6">
                                   <h1>Create Administrator</h1>
                            </div>
                            <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Administrator</li>
                                   </ol>
                            </div>
                     </div>
              </div><!-- /.container-fluid -->
       </section>
       <!-- Main content -->
       <section class="content">
              <div class="row">
                     <div class="col-md-12">
                            <div class="card card-outline card-info">
                                   <div class="card-header">
                                          <h3 class="card-title">
                                                 <a href="{{route('admins')}}" class="btn btn-success">Administrators</a>
                                          </h3>
                                          <!-- tools box -->
                                          <div class="card-tools">
                                                 <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                        <i class="fas fa-minus"></i></button>
                                                 <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                                        <i class="fas fa-times"></i></button>
                                          </div>
                                          <!-- /. tools -->
                                   </div>
                                   <!-- /.card-header -->
                                   <div class="card-body pad">
                                          <x-alerts.success />
                                          <form action="{{ route('admin-create') }}" method="post" enctype="multipart/form-data">
                                                 @csrf
                                                 <div class="mb-3">
                                                        <label for="exampleInputEmail1">Name</label>
                                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                 </div>
                                                 <div class="mb-3">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email address">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                 </div>
                                                 <div class="mb-3">
                                                        <label for="exampleInputEmail1">Phone</label>
                                                        <input type="test" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number">
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                 </div>
                                                 <div class="mb-3">
                                                        <label for="passport">Passport</label>
                                                        <div class="custom-file">
                                                               <input type="file" class="custom-file-input @error('passport') is-invalid @enderror" id="passport" name="passport" value="passport">
                                                               <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                               @error('passport')
                                                               <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $message }}</strong>
                                                               </span>
                                                               @enderror
                                                        </div>
                                                 </div>
                                                 <div class="mb-3">
                                                        <label for="password">Select Administrator Role</label>
                                                        <select name="role" class="form-control @error('role') is-invalid @enderror" style="width: 100%;">
                                                               <option value="">Role</option>
                                                               <option value="Superadmin">Super Administrator</option>
                                                               <option value="Admin">Administrator</option>
                                                        </select>
                                                        @error('role')
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                 </div>
                                                 <div class="mb-3">
                                                        <label for="password">Password</label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                 </div>

                                                 <div class="mb-3">
                                                        <label for="password-confirm">Confirm Password</label>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter password confirmation">
                                                 </div>

                                                 <p class="mb-0 text-sm">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                 </p>
                                          </form>
                                   </div>
                            </div>
                     </div>
                     <!-- /.col-->
              </div>
              <!-- ./row -->
       </section>
       <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
