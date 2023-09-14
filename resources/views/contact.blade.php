@extends('layouts.app')
@section('content')
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>I read <span>you</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">

        @include('_message')

        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Contact me!</h3>
                <p class="open-sans-font mb-3">{{$getrecord->name}}</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span>{{$getrecord->email}}
                </p>

                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="linkedin"><a target="_blank" title="Linkedin" href="{{$getrecord->linkedin}}"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="github"><a target="_blank" title="Github" href="{{$getrecord->github}}"><i class="fa fa-github"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Left Side Ends -->
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <form method="post" action="{{secure_url ('contact/post')}}">
                    {{ csrf_field() }}
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" placeholder="YOUR NAME">
                                @error('name')
                                <div class="error-message">
                                    <small>{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" placeholder="YOUR EMAIL">
                                @error('email')
                                <div class="error-message">
                                    <small>{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" placeholder="YOUR SUBJECT">
                                @error('subject')
                                <div class="error-message">
                                    <small>{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                @error('message')
                                <div class="error-message">
                                    <small>{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="button">
                                <span class="button-text">Send Message</span>
                                <span class="button-icon fa fa-send"></span>
                            </button>
                        </div>
                        <div class="col-12 form-message">
                            <span class="output_message text-center font-weight-600 text-uppercase"></span>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <!-- Contact Form Ends -->
    </div>
    </div>

</section>
@endsection