<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Customer Login</h4>
            </div>
            <div class="modal-body customer-box">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                    <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="email1" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                        Submit
                                    </button>
                                    <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="Registration">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="email" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input class="form-control" id="password" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                        Save &amp; Continue
                                    </button>
                                    <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                        Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
            @endphp
            <a class="navbar-brand" href="index.html">
                <img src="assets/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Category </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        @foreach($mainCategories as $rs)


                            <a class="dropdown-item" href="{{route('categoryprojects',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a>

                            @include('home.categorytree',['children' => $rs->children])

                        @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">Blog </a>
                            <a class="dropdown-item" href="blog-single.html">Blog single </a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->

