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
                        <form role="form" method="post" action="{{route('login')}}" accept-charset="UTF-8" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input class="form-control" id="password" type="password" name="password" required autocomplete="current-password" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <x-jet-button class="btn btn-light btn-radius btn-brd grd1">
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                    <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="Registration">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div>
                                            <x-jet-label for="name" value="{{ __('Name') }}" />
                                            <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                </div>
                                </div>


                            <div class="form-group">
                                <div class="col-sm-12">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <x-jet-button class="ml-4">
                                    {{ __('Register') }}
                                </x-jet-button>
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
                    <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Category </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            @foreach($mainCategories as $rs)


                                <a class="dropdown-item" href="{{route('categoryprojects',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a>

                                @include('home.categorytree',['children' => $rs->children])

                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('references')}}">References</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a></li>
                    @auth()

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/loginuser">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a href="/logoutuser" class="text-uppercase">Log Out</a>
                            </div>
                        </li>

                    @endauth

                </ul>
@guest
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-btn-new log orange" href="" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                </ul>
                @endguest
            </div>
        </div>
    </nav>
</header>
<!-- End header -->

