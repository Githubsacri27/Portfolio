@extends('backend.layouts.app')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Contact Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @include('_message')
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <section class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($getrecord as $value)
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->subject}}</td>
                    <td>{{$value->message}}</td>
                    <td>
                    <a onclick="return confirm('Are you sure want to delete?')" href="{{secure_url ('admin/contact/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </div>
          </div>
        </section>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection