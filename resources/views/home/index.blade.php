@extends('layouts.home')
@section('title', 'Thesis')



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
                                <h2><a href="#" title="">{{$rs->title}}</a></h2>
                            </div>
                            <div class="course-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
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
