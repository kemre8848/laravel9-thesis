@extends('layouts.home')


@section('title' , 'Frequently Asked Question '.$setting->title)
@section('decription', $setting->decription)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection


@section('content')

    <div class="all-title-box bg1"  >

        <div class="container text-center">

            <h1>Frequently Asked Question<span></span></h1>
        </div>
    </div>






    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row">
                <div class="col-md-8 offset-md-2">
                    <div id="accordion">
                   @foreach($datalist as $rs)
                       <div class="card">
                           <div class="card-header">
                               <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                   <h5>{{$rs->question}}</h5></a>
                           </div>
                       </div>
                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                            <div class="card-body">
                                {!! $rs->answer !!}
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div><!-- end title -->




        </div><!-- end container -->
    </div>


@endsection


