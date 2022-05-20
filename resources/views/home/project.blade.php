@extends('layouts.home')
@section('title', $data->title)



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
                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item">
                            <div class="row">
                                @foreach($images as $rs)
                                <div class="col-lg-6">
                                    <div class="image-blog">
                                        <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
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
                        </div>
                    </div>


                    <div class="blog-comments">
                        <h4>Comments (3)</h4>
                        <div id="comment-blog">
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="avatar"><img alt="" src="images/avatar-01.jpg" class="avatar"></div>
                                    <div class="comment-container">
                                        <h5 class="comment-author"><a href="#">John Smith</a></h5>
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date link-style1">February 22, 2015</a>
                                            <a class="comment-reply-link link-style3" href="#respond">Reply »</a>
                                        </div>
                                        <div class="comment-body">
                                            <p>Ne omnis saperet docendi nec, eos ea alii molestiae aliquand. Latine fuisset mele, mandamus atrioque eu mea, wi forensib argumentum vim an. Te viderer conceptam sed, mea et delenit fabellas probat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="avatar"><img alt="" src="images/avatar-02.jpg" class="avatar"></div>
                                    <div class="comment-container">
                                        <h5 class="comment-author"><a href="#">John Smith</a></h5>
                                        <div class="comment-meta">
                                            <a href="#" class="comment-date link-style1">February 22, 2015</a>
                                            <a class="comment-reply-link link-style3" href="#respond">Reply »</a>
                                        </div>
                                        <div class="comment-body">
                                            <p>Ne omnis saperet docendi nec, eos ea alii molestiae aliquand. Latine fuisset mele, mandamus atrioque eu mea, wi forensib argumentum vim an. Te viderer conceptam sed, mea et delenit fabellas probat.</p>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div class="avatar"><img alt="" src="images/avatar-03.jpg" class="avatar"></div>
                                            <div class="comment-container">
                                                <h5 class="comment-author"><a href="#">Thomas Smith</a></h5>
                                                <div class="comment-meta"><a href="#" class="comment-date link-style1">February 14, 2015</a><a class="comment-reply-link link-style3" href="#respond">Reply »</a></div>
                                                <div class="comment-body">
                                                    <p>Labores pertinax theophrastus vim an. Error ditas in sea, per no omnis iisque nonumes. Est an dicam option, ad quis iriure saperet nec, ignota causae inciderint ex vix. Iisque qualisque imp duo eu, pro reque consequ untur. No vero laudem legere pri, error denique vis ne, duo iusto bonorum.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments-form">
                        <h4>Leave a comment</h4>
                        <div class="comment-form-main">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="form-control" name="commenter-name" placeholder="Name" id="commenter-name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="form-control" name="commenter-email" placeholder="Email" id="commenter-email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input class="form-control" name="commenter-url" placeholder="Website URL" id="commenter-url" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="commenter-message" placeholder="Message" id="commenter-message" cols="30" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 post-btn">
                                        <button class="hover-btn-new orange"><span>Post Comment</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div><!-- end col -->
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
            </div><!-- end row -->
        </div><!-- end container -->
    </div>











@endsection
