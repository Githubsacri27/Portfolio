@extends('backend.layouts.app')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Account Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">My Account</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @include('_message')
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">My Account Page</h3>
                        </div>
                        <form class="form-horizontal" method="post" action="{{url('admin/my_account/update')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Name <span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required value="{{$getrecord->name}}">
                                        <span style="color:red;">{{$errors->first('name')}}
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Email <span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required value="{{$getrecord->email}}">
                                        <span style="color:red;">{{$errors->first('email')}}
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Password <span style="color:red;"></span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="password" class="form-control" placeholder="Enter Password">
                                    </div>
                                </div>
                                (Leave blank if you are not changing the password)


                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('admin/dashboard') }}" class="btn btn-default float-right">Cancel</a>
                            </div>


                        </form>
                    </div>
                </div>
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