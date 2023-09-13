@extends('backend.layouts.app')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">About Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">About</a></li>
            <li class="breadcrumb-item active">About</li>
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

      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">About Page</h3>
            </div>
            <form class="form-horizontal" method="post" action="{{ url('admin/about/post') }}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->first_name}}" name="first_name" class="form-control" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->last_name}}" name="last_name" class="form-control" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->address}}" name="address" class="form-control" placeholder="Address">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Github</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->github}}" name="github" class="form-control" placeholder="Github">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Linkedin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->linkedin}}" name="linkedin" class="form-control" placeholder="Linkedin">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" value="{{@$getrecord[0]->email}}" name="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Language</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->language}}" name="language" class="form-control" placeholder="Language">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Years of experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->years_of_experience}}" name="years_of_experience" class="form-control" placeholder="Years of experience">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Completed projects</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->completed_projects}}" name="completed_projects" class="form-control" placeholder="Completed projects">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Year of Experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->year_of_experience}}" name="year_of_experience" class="form-control" placeholder="Year of Experience">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->title}}" name="title" class="form-control" placeholder="Title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Sub title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->sub_title}}" name="sub_title" class="form-control" placeholder="Sub title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->description}}" name="description" class="form-control" placeholder="Description">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Year of Experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_year_of_experience}}" name="second_year_of_experience" class="form-control" placeholder="Second Year of Experience">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_title}}" name="second_title" class="form-control" placeholder="Second Title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Sub title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_sub_title}}" name="second_sub_title" class="form-control" placeholder="Second Sub title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_description}}" name="second_description" class="form-control" placeholder="Second Description">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Year of Experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_year_of_experience}}" name="third_year_of_experience" class="form-control" placeholder="Third Year of Experience">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_title}}" name="third_title" class="form-control" placeholder="Third Title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Sub title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_sub_title}}" name="third_sub_title" class="form-control" placeholder="Third Sub title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_description}}" name="third_description" class="form-control" placeholder="Third Description">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Work Experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->work_experience}}" name="work_experience" class="form-control" placeholder="Work Year of Experience">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Work Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->work_title}}" name="work_title" class="form-control" placeholder="work Title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Work Sub title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->work_sub_title}}" name="work_sub_title" class="form-control" placeholder="Work Sub title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Work Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->work_description}}" name="work_description" class="form-control" placeholder="Work Description">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Work Experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_work_experience}}" name="second_work_experience" class="form-control" placeholder="Second Work Year of Experience">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Work Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_work_title}}" name="second_work_title" class="form-control" placeholder="Second Work Title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Work Sub title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_work_sub_title}}" name="second_work_sub_title" class="form-control" placeholder="Second Work Sub title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Second Work Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->second_work_description}}" name="second_work_description" class="form-control" placeholder="Second Work Description">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Work Experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_work_experience}}" name="third_work_experience" class="form-control" placeholder="Third Work Year of Experience">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Work Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_work_title}}" name="third_work_title" class="form-control" placeholder="Third Work Title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Work Sub title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_work_sub_title}}" name="third_work_sub_title" class="form-control" placeholder="Third Work Sub title">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Third Work Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{@$getrecord[0]->third_work_description}}" name="third_work_description" class="form-control" placeholder="Third Work Description">
                  </div>
                </div>


                <input type="hidden" name="id" value="{{@$getrecord[0]->id}}">

              </div>

              <div class="card-footer">
              @csrf
                @if(isset($getrecord[0]))
                <button type="submit" name="add_to_update" value="Edit" class="btn btn-info">Edit</button>
                @else
                <button type="submit" name="add_to_update" value="Add" class="btn btn-info">Add</button>
                @endif
                <a href="{{ url('admin/dashboard') }}" class="btn btn-default float-right">Cancel</a>
              </div>


            </form>
          </div>
        </div>



      </div>
      <!-- /.row -->
      <!-- Main row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>


@endsection