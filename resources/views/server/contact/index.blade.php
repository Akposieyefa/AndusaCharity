@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
              <div class="container-fluid">
                     <div class="mb-2 row">
                            <div class="col-sm-6">
                                   <h1>All Messages</h1>
                            </div>
                            <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Messages</li>
                                   </ol>
                            </div>
                     </div>
              </div><!-- /.container-fluid -->
       </section>

       <!-- Main content -->
       <section class="content">
              <div class="row">
                     <!-- /.col -->
                     <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                   <div class="card-header">
                                          <h3 class="card-title"><a href="{{route('recent-contacts')}}" class="btn btn-success">Recent Messages</a></h3>
                                          <div class="card-tools">
                                                 <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control" placeholder="Search Mail">
                                                        <div class="input-group-append">
                                                               <div class="btn btn-primary">
                                                                      <i class="fas fa-search"></i>
                                                               </div>
                                                        </div>
                                                 </div>
                                          </div>
                                          <!-- /.card-tools -->
                                   </div>
                                   <!-- /.card-header -->
                                   <div class="p-0 card-body">
                                          <div class="table-responsive mailbox-messages">
                                                 <table class="table table-hover table-striped">
                                                        <tbody>
                                                               @php
                                                               $i = 1;
                                                               @endphp
                                                               @foreach($messages as $message)
                                                               <tr>
                                                                      <td>
                                                                             <div class="icheck-primary">
                                                                                    {{ $i++ }}
                                                                             </div>
                                                                      </td>
                                                                      <td class="mailbox-name"><a href="{{ route('contact-show', $message->id) }}">{{ $message->name }}</a></td>
                                                                      <td class="mailbox-subject"><b>{{ $message->subject }}</b> - {{\Illuminate\Support\Str::limit($message->message,30)}}
                                                                      </td>
                                                                      <td class="mailbox-attachment"></td>
                                                                      <td class="mailbox-date">{{ $message->created_at->diffForHumans() }}</td>
                                                               </tr>
                                                               @endforeach
                                                        </tbody>
                                                 </table>
                                                 <!-- /.table -->
                                          </div>
                                          <!-- /.mail-box-messages -->
                                   </div>
                                   <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                     </div>
                     <!-- /.col -->
              </div>
              <!-- /.row -->
       </section>
       <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
