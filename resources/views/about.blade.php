@extends('layouts.app')
@section('content')

<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>About <span>Me</span></h1>
    <span class="title-bg">Summary</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal info</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="{{ secure_url('public/img/fotop.jpg')}}" class="img-fluid main-img-mobile" alt="my picture" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">Name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->first_name}}</span> </li>
                            <li> <span class="title">Last name :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->last_name}}</span> </li>
                            <li> <span class="title">Location :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->address}}</span> </li>
                            <li> <span class="title">Languages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->language}}</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            
                            <li> <span class="title">Github :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->github}}</span> </li>
                            <li> <span class="title">Linkedin :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->linkedin}}</span> </li>
                            <li> <span class="title">Email :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{@$getrecord[0]->email}}</span> </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">{{@$getrecord[0]->years_of_experience}}</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">years of <span class="d-block">experience</span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">{{@$getrecord[0]->completed_projects}}</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{@$getrecord[0]->year_of_experience}}</span>
                            <h5 class="poppins-font text-uppercase">{{@$getrecord[0]->title}}<span class="place open-sans-font">{{@$getrecord[0]->sub_title}}</span></h5>
                            <p class="open-sans-font">{{@$getrecord[0]->description}}</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{@$getrecord[0]->second_year_of_experience}}</span>
                            <h5 class="poppins-font text-uppercase">{{@$getrecord[0]->second_title}}<span class="place open-sans-font">{{@$getrecord[0]->second_sub_title}}</span></h5>
                            <p class="open-sans-font">{{@$getrecord[0]->second_description}}</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{@$getrecord[0]->third_year_of_experience}}</span>
                            <h5 class="poppins-font text-uppercase">{{@$getrecord[0]->third_title}} <span class="place open-sans-font">{{@$getrecord[0]->third_sub_title}}</span></h5>
                            <p class="open-sans-font">{{@$getrecord[0]->third_description}}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{@$getrecord[0]->work_experience}}</span>
                            <h5 class="poppins-font text-uppercase">{{@$getrecord[0]->work_title}}<span class="place open-sans-font">{{@$getrecord[0]->work_sub_title}}</span></h5>
                            <p class="open-sans-font">{{@$getrecord[0]->work_description}}</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{@$getrecord[0]->second_work_experience}}</span>
                            <h5 class="poppins-font text-uppercase">{{@$getrecord[0]->second_work_title}}<span class="place open-sans-font">{{@$getrecord[0]->second_work_sub_title}}</span></h5>
                            <p class="open-sans-font">{{@$getrecord[0]->second_work_description}}</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">{{@$getrecord[0]->third_work_experience}}</span>
                            <h5 class="poppins-font text-uppercase">{{@$getrecord[0]->third_work_title}}<span class="place open-sans-font">{{@$getrecord[0]->third_work_sub_title}}</span></h5>
                            <p class="open-sans-font">{{@$getrecord[0]->third_work_description}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>
@endsection


