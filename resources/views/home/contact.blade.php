@extends('layouts.home')


@section('title' , 'Contact '.$setting->title)
@section('decription', $setting->decription)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('content')

    <div class="all-title-box bg1"  >

        <div class="container text-center">

            <h1>Contact Form<span></span></h1>
        </div>
    </div>
    <br>





<div class="row container-fluid">

    <div class="col-xl-6 col-md-8 col-sm-8">
        <div class="contact_form">
            <div id="message"></div>
            @include('home.messages')
            <form id="contactform" class="clearfix" action="{{route("storemessage")}}" name="" method="post">
                @csrf
                <div class="row row-fluid">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name & Surname">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea class="form-control" type="text" name="message" id="message" rows="6" placeholder="Give us more details.."></textarea>
                    </div>
                    <div class="text-center pd">
                        <button type="submit" value="Send Message" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xl-6 col-md-4 col-sm-4">
        {!! $setting->contact!!}
    </div>
</div>

<br>

@endsection


