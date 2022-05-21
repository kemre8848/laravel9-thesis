@extends('layouts.home')


@section('title', $setting->title)
@section('decription', $setting->decription)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('content')

    @include('home.slider2')
<br>


        <div class="row">

            @foreach($projectlist1 as $rs)
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="course-item">
                        <br>

                        <div class="image-blog">
                            <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                        </div>
                        <div class="course-br">
                            <div class="course-title">
                                <h2><a href="{{route('project',['id'=>$rs->id])}}" >{{$rs->title}}</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>{{$rs->description}} </p>
                            </div>
                            <div class="course-rating">
                                4.5
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                            </div>
                        </div>

                    </div>

                </div><!-- end col -->

            @endforeach
        </div>








@endsection
