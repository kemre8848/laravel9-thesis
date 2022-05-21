@extends('layouts.home')


@section('title' , 'About Us '.$setting->title)
@section('decription', $setting->decription)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('content')

    <div class="all-title-box bg1"  >

        <div class="container text-center">

            <h1>About<span></span></h1>
        </div>
    </div>






    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">{!! $setting->aboutus !!}</p>
                </div>
            </div><!-- end title -->




        </div><!-- end container -->
    </div>


@endsection


