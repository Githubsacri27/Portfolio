@extends('layouts.app')
@section('content')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>works</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <!-- Articles Starts -->
        <div class="row">
            <!-- Article Starts -->
            @foreach($getrecord as $value)

            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="{{secure_url('works-post/'.$value->id)}}" class="d-block position-relative overflow-hidden">
                            <img src="{{ secure_url('public/works/'.$value->image)}}" class="img-fluid" alt="Works Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="{{ secure_url('works-post/'.$value->id)}}">{{ $value->title }}</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>{{$value->description}}
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
            <!-- Article Ends -->
     
            <!-- Pagination Starts -->

            <!-- Pagination Ends -->
        </div>
        <!-- Articles Ends -->
    </div>

</section>
@endsection