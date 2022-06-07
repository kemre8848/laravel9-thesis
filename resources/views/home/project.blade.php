@extends('layouts.home')
@section('title', $data->title)

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

    <div class="all-title-box opakarkaplan"  style="background-image: url({{Storage::url($data->image)}});">

        <div class="container text-center">

            <h1>{{$data->category->title}}<span class="m_1">{{$data->description}}</span></h1>
        </div>
    </div>
    <br><br>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row">
                <form class="col-lg-9 blog-post-single" action="#" method="get">
                    <div class="blog-item">
                            <div class="row">
                                @foreach($images as $rs)
                                <div class="col-lg-6">
                                    <div class="image-blog">
                                        <img src="{{Storage::url($rs->image)}}" style=" object-fit: cover; height: 300px; width: 600px;"alt="" class="img-fluid">
                                    </div>
                                </div>

                                @endforeach

                            </div>

                        <div class="post-content">
                            <div class="blog-title">
                                <h2><a href="#" title="">{{$data->title}}</a></h2>
                            </div>
                            <div class="blog-desc">
                                {!! $data->detail !!}
                            </div>
                            <div class="blog-title">
                                <h2><a href="#" title="">{{$data->videlink}}</a></h2>
                            </div>
                            <div class="course-rating">
                                    @php
                                        $average=$data->comment->average('rate');
                                    @endphp
                                {{number_format($average,1)}}
                                <span class="fa fa-star @if($average>=1) checked @endif"></span>
                                <span class="fa fa-star @if($average>=2) checked @endif"></span>
                                <span class="fa fa-star @if($average>=3) checked @endif"></span>
                                <span class="fa fa-star @if($average>=4) checked @endif"></span>
                                <span class="fa fa-star @if($average>=5) checked @endif"></span>
                            </div>
                            <a href="#">{{$data->comment->count('id')}} Review(s) / Add Review</a>

                            @include('home.messages')
                        </div>
                    </div>
                </form>

                <div class="col-lg-3 col-12 right-single">
                    <div class="widget-search">
                        <div class="site-search-area">
                            <form method="get" id="site-searchform" action="#">
                                <div>
                                    <input class="input-text form-control" name="search-k" id="search-k" placeholder="Search keywords..." type="text">
                                    <input id="searchsubmit" value="Search" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>@foreach($category as $rs)
                                <li><a href="#">{{$rs->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row">

                    <div class="blog-comments col-lg-6">
                        <h4>Comments</h4>
                        @foreach($reviews as $rs)
                            <div id="comment-blog">
                                <ul class="comment-list">
                                    <li class="comment">
                                        <div class="avatar"><img alt="" src="images/avatar-01.jpg" class="avatar"></div>
                                        <div class="comment-container">
                                            <h5 class="comment-author"><a href="#">{{$rs->user->name}}</a></h5>
                                            <div class="review-rating pull-right">
                                                <i class="fa fa-star @if($rs->rate<1) -o empty @endif"></i>
                                                {{$rs->rate}}
                                            </div>
                                            <div class="comment-meta">
                                                <a href="#" class="comment-date link-style1">{{$rs->created_at}}</a>
                                                <a class="comment-reply-link link-style3" href="#respond">{{$rs->subject}}</a>
                                            </div>
                                            <div class="comment-body">
                                                <p>{{$rs->review}}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>




                    <div class="comments-form col-lg-6">
                        <br>
                        <h4>Leave a comment</h4>
                        <div class="comment-form-main">
                            <form class="col-lg-9 blog-post-single" action="{{route('storecomment')}}" method="post">
                                @csrf
                                <input class="form-control" type="hidden" name="project_id"  id="project_id" value="{{$data->id}}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" placeholder="Subject" id="subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="review" placeholder="Message" id="review"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="defaultSelect" class="form-label">Rate</label>
                                            <select id="rate" name="rate" class="form-select">
                                                <option >1</option>
                                                <option >2</option>
                                                <option >3</option>
                                                <option >4</option>
                                                <option >5</option>
                                            </select>
                                        </div>
                                    </div>
                                    @auth()
                                        <div class="col-md-12 post-btn">
                                            <button class="hover-btn-new orange"><span>Submit</span></button>
                                        </div>
                                    @else

                                        <a href="/login" class="primary-btn">For Submit Your Review, Please login </a>
                                    @endauth
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end col -->



            </div><!-- end row -->
        </div><!-- end container -->
    </div>

@endsection

