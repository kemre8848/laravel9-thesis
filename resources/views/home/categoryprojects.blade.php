@extends('layouts.home')
@section('title', $category->title , 'Projects')



@section('content')
    <div class="all-title-box opakarkaplan"  style="background-image: url({{Storage::url($category->image)}});">

        <div class="container text-center">

            <h1>{{$category->title}}<span class="m_1">{{$category->description}}</span></h1>
        </div>
    </div>

    <div class="row">

        @foreach($projects as $rs)
            <div class="col-lg-4 col-md-4 col-4" style="padding: 50px;">
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
