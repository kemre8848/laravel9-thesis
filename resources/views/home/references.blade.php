@extends('layouts.home')


@section('title' , 'References '.$setting->title)
@section('decription', $setting->decription)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('content')

    <div class="all-title-box bg1"  >

        <div class="container text-center">

            <h1>References<span></span></h1>
        </div>
    </div>






    <div id="overviews" class="section lb">
        <div class=" text-center">

                    <p class="lead">{!! $setting->references !!}</p>
        </div><!-- end container -->
    </div>


@endsection


