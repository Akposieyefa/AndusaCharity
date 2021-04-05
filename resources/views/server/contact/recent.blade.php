@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
              <div class="container-fluid">
                     <div class="mb-2 row">
                            <div class="col-sm-6">
                                   <h1>New Messages</h1>
                            </div>
                            <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Messsages</li>
                                   </ol>
                            </div>
                     </div>
              </div><!-- /.container-fluid -->
       </section>

       <!-- Main content -->
       <section class="content">
              <div class="container-fluid">
                     <div class="row">
                            <div class="col-12">
                                   <div class="card">
                                          <div class="card-header">
                                                 <h3 class="card-title"><a href="{{url('/contacts')}}" class="btn btn-success">Old Messages</a></h3>
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="container">
                                                 <x-alerts.success />
                                          </div>
                                          <div class="card-body">
                                                 <table id="example2" class="table table-bordered table-hover">
                                                        <thead>
                                                               <tr>
                                                                      <th>No..</th>
                                                                      <th>Name</th>
                                                                      <th>Email</th>
                                                                      <th>Subject</th>
                                                                      <th>Date</th>
                                                                      <th>Action</th>
                                                               </tr>
                                                        </thead>
                                                        <tbody>
                                                               @php
                                                               $i = 1;
                                                               @endphp
                                                               @foreach($messages as $message)
                                                               <tr>
                                                                      <td>{{ $i++ }}</td>
                                                                      <td>{{ $message->name }}</td>
                                                                      <td>{{ $message->email }}</td>
                                                                      <td> {{ $message->subject }}</td>
                                                                      <td>{{ $message->created_at->diffForHumans() }}</td>
                                                                      <td>
                                                                             <div class="btn-group">
                                                                                    <form action="{{ route('contact-destroy', $message->id) }}" method="POST">
                                                                                           @csrf
                                                                                           {{ method_field('DELETE') }}
                                                                                           <a class="btn btn-primary" title="Respond to message" href="{{ route('contact-show', $message->id) }}"><i class="fa fa-eye"></i></a>
                                                                                           <button title="Delete message" onclick="return confirm('Are you sure you want to delete this...?')" class="btn btn-danger" href="#"><i class="fa fa-trash"></i></button>
                                                                                    </form>
                                                                             </div>
                                                                      </td>
                                                               </tr>
                                                               @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                               <tr>
                                                                      <th>No..</th>
                                                                      <th>Name</th>
                                                                      <th>Email</th>
                                                                      <th>Subject</th>
                                                                      <th>Date</th>
                                                                      <th>Action</th>
                                                               </tr>
                                                        </tfoot>
                                                 </table>
                                                 {{ $messages->links() }}
                                          </div>
                                          <!-- /.card-body -->
                                   </div>
                                   <!-- /.card -->
                            </div>
                            <!-- /.col -->
                     </div>
                     <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
       </section>
       <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
