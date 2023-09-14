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

            @include('_message')
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Works Page</h3>
                        </div>

                        <form class="form-horizontal" method="post" action="{{secure_url('admin/works/add')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Works Image <span style="color:red;">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" class="form-control">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Works Title <span style="color: red;"> *</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" placeholder="Works Title" required>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Url <span style="color: red;"> *</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="url" class="form-control" placeholder="Url" required>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Works Description
                                        <span style="color: red;"> *</span></label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="description" class="form-control" placeholder="Works Description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Text Editor
                                        <span style="color: red;"> *</span></label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="text_editor" class="form-control editor" placeholder="Text Editor"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary">Add</button>


                                <a href="" class="btn btn-default float-right">Cancel</a>
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

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.2/tinymce.min.js"></script>

<script type="text/javascript">
    tinymce.init({
        selector: '.editor',

        height: '500px',
        plugins: 'link code image textcolor codesample',
        codesample_languaje: [{
                text: 'HTML/XML',
                value: 'markup'
            },
            {
                text: 'JavaScript',
                value: 'javascript'
            },
            {
                text: 'CSS',
                value: 'css'
            },
            {
                text: 'PHP',
                value: 'php'
            },
            {
                text: 'Ruby',
                value: 'ruby'
            },
            {
                text: 'Python',
                value: 'python'
            },
            {
                text: 'Java',
                value: 'java'
            },
            {
                text: 'C',
                value: 'c'
            },
            {
                text: 'C#',
                value: 'csharp'
            },
            {
                text: 'C++',
                value: 'cpp'
            }
        ],
        toolbar: [
            "fontselect | bullist numlist outdent indent | link image | codesample | forecolor backcolor | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect | fontselect | fontsizeselect | removeformat | fullscreen | preview | code"
        ],

        fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
        font_formats: 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Times New Roman=times new roman,times,serif;',
    });
</script>

@endsection