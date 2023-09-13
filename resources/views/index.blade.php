@extends('layouts.app')
@section('content')

<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 position-fixed d-none d-lg-block">
            <img width="360px" height="336px" src="{{url('public/img/'.@$getrecord[0]->profile)}}" style="
            display:flex;
            justify-content:center;
            margin: auto;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            height:cal(100vh - 80px);
            z-index: 111;
            border-radius:300px;
            border: 4px solid #2592EF;
            box-shadow: 0 0 7px #2592EF" />
        </div>

        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="{{url('public/img/'.@$getrecord[0]->profile)}}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h1 class="text-uppercase poppins-font">{{@$getrecord[0]->your_name}}<span>{{@$getrecord[0]->work_experience}}</span></h1>
                <p class="open-sans-font">{{@$getrecord[0]->description}}</p>
                <a class="button" href="{{url('about')}}">
                    <span class="button-text">more About me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
            <div class="seccion">
                <ul class="ul">
                    <li class="li">
                        <a target="_blank" title="Github" href="https://github.com/Githubsacri27"   class="a" >Visit my Github</a>
                    </li>
                    <li class="li">
                        <a target="_blank" title="LinkedIn" href="https://www.linkedin.com/in/rub%C3%A9n-sacrist%C3%A1n" class="a" >Visit my LinkedIn</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->
@endsection