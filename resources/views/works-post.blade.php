@extends('layouts.app')
@section('content')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>My <span>Proyects</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
            <article class="col-12">
                <!-- Meta Starts -->
                
                <!-- Meta Ends -->
                <!-- Article Content Starts -->
                <h1 class="text-uppercase text-capitalize">{{$getrecord->title}}</h1>
                <img src="{{ secure_url('public/works/'.$getrecord->image)}}" class="img-fluid" alt="Works image"/>
                <div class="blog-excerpt open-sans-font pb-5">
                    <p>{{$getrecord->description}}</p>
                    <a class="button" target="_blank" href="{{$getrecord->url}}">
                    <span class="button-text">See Project</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
                </div>
                <!-- Article Content Ends -->
            </article>
            <!-- Article Ends -->
        </div>
    </div>
</section>
@endsection