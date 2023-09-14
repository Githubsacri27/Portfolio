@extends('backend.layouts.app')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Works Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Works</a></li>
            <li class="breadcrumb-item active">Works</li>
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
      @include('_message')
      <a href="{{secure_url ('admin/works/add')}}" class="btn btn-primary">Add Works</a>

      <div class="row">
        <section class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>text_editor</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($getrecord as $value)
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>
                      @if(!empty($value->image))
                      <img src="{{ secure_url('public/works/'.$value->image) }}" style="width: 80px; height: 80px; border-radius: 50%;">
                      @endif

                    </td>
                    <td>{{$value->title}}</td>
                    <td>{{$value->description}}</td>
                    <td>{!! $value->text_editor !!}</td>
                    <td>
                      <a href="{{ secure_url('admin/works/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                      <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('admin/works/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </div>
          </div>
        </section>

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection