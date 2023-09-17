@extends('layouts.app')
@section('content')

<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 center-vertically">
    <div class="row home-details-container align-items-center">
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <h1 class="text-uppercase poppins-font">{{@$getrecord[0]->your_name}}<span>{{@$getrecord[0]->work_experience}}</span></h1>
                <p class="open-sans-font">{{@$getrecord[0]->description}}</p>
                <a class="button" href="{{secure_url('about')}}">
                    <span class="button-text">more About me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
            <div class="seccion">
                <ul class="ul">
                    <li class="li">
                        <a target="_blank" title="Github" href="https://github.com/Githubsacri27" class="a">Visit my Github</a>
                    </li>
                    <li class="li">
                        <a target="_blank" title="LinkedIn" href="https://www.linkedin.com/in/rub%C3%A9n-sacrist%C3%A1n" class="a">Visit my LinkedIn</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->
@endsection
