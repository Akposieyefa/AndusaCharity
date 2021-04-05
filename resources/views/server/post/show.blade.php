@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
              <div class="container-fluid">
                     <div class="col-md-12">
                            <x-alerts.success />
                     </div>
                     <div class="mb-2 row">
                            <div class="col-sm-6">
                                   <h1>Blog Details</h1>
                            </div>
                            <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                          <li class="breadcrumb-item active">Details</li>
                                   </ol>
                            </div>
                     </div>
              </div><!-- /.container-fluid -->
       </section>

       <!-- Main content -->
       <section class="content">
              <div class="container-fluid">
                     <div class="row">
                            <!-- /.col -->
                            <div class="col-md-12">
                                   <div class="card card-primary card-outline">
                                          <div class="card-header">
                                                 <h3 class="card-title"><a href="{{route('posts')}}" class="btn btn-success">Blog Posts</a></h3>
                                                 <div class="card-tools">
                                                        <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                                        <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                                                 </div>
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="p-0 card-body">
                                                 <div class="mailbox-read-info">
                                                        <h5>Blog Title : {{ $post->title}}</h5>
                                                        <h6>From: Admin
                                                               <span class="float-right mailbox-read-time">{{ $post->created_at->diffForHumans() }}</span></h6>
                                                 </div>
                                                 <div class="p-4 mailbox-read-post">
                                                        <p class="text-justify">
                                                               {!! $post->body !!}
                                                        </p>
                                                 </div>
                                                 <!-- /.mailbox-read-post -->
                                          </div>
                                          <!-- /.card-body -->
                                          <!-- /.card-footer -->
                                          <div class="card-footer">
                                                 <div class="float-right">
                                                        <a href="" type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalLong"><i class="fas fa-edit"></i> Edit Post</a>
                                                 </div>
                                                 <form action="{{ route('post-destroy', $post->id) }}" method="POST">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <a title="Delete post" onclick="return confirm('Are you sure you want to delete this...?')" href="#" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</a>
                                                 </form>
                                          </div>
                                          <!-- /.card-footer -->
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
<div>


       <div class="modal" id="exampleModalLong" style="background: rgba(0,0,0,0.5);" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                     <div class="modal-content">
                            <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLongTitle">Edit Blog Post</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                   </button>
                            </div>
                            <div class="modal-body">
                                   <x-alerts.success />
                                   <form method="post" action="{{ route('post-update', $post->id) }}">
                                          @csrf
                                          {{ method_field('PATCH') }}
                                          <div class="mb-3">
                                                 <label for="title">Title</label>
                                                 <input type="text" name="title" value="{{ $post->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="Enter blog title">
                                                 @error('title')
                                                 <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                 </span>
                                                 @enderror
                                          </div>
                                          <div class="mb-3">
                                                 <label for="title">Body</label>
                                                 <textarea name="body" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>
                                                 @error('body')
                                                 <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                 </span>
                                                 @enderror
                                          </div>
                                          <div class="modal-footer">
                                                 <button type="submit" class="btn btn-secondary">
                                                        Submit
                                                 </button>
                                          </div>
                                   </form>
                            </div>
                     </div>
              </div>
       </div>
</div>

@endsection

