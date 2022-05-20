@extends('layouts.home')
@section('title', $data->title)



@section('content')
    <div class="all-title-box opakarkaplan"  style="background-image: url({{Storage::url($data->image)}});">

        <div class="container text-center">

            <h1>{{$data->category->title}}<span class="m_1">{{$data->description}}</span></h1>
        </div>
    </div>

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


