@extends('layouts.home')


@section('title', $setting->title)
@section('decription', $setting->decription)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
@section('head')
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: orange;
        }
    </style>
@endsection



@section('content')

    @include('home.slider2')
<br>


        <div class="row" style="padding: 50px">

            @foreach($projectlist1 as $rs)
                <div class="col-lg-4 col-md-4">
                    <div class="course-item">
                        <br>

                        <div class="image-blog ">
                            <img src="{{Storage::url($rs->image)}}" style=" object-fit: cover; height: 300px; width: 600px;" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="{{route('project',['id'=>$rs->id])}}" >{{$rs->title}}</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>{{$rs->description}} </p>
                            </div>
                            <div class="course-rating">
                                @php
                                    $average=$rs->comment->average('rate');
                                @endphp
                                {{number_format($average,1)}}
                                <span class="fa fa-star @if($average>=1) checked @endif"></span>
                                <span class="fa fa-star @if($average>=2) checked @endif"></span>
                                <span class="fa fa-star @if($average>=3) checked @endif"></span>
                                <span class="fa fa-star @if($average>=4) checked @endif"></span>
                                <span class="fa fa-star @if($average>=5) checked @endif"></span>
                            </div>

                            </div>

                    </div>

                </div><!-- end col -->

            @endforeach
        </div>








@endsection
