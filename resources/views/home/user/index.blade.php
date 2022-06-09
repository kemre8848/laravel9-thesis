@extends('layouts.home')


@section('title' , 'User Panel')




@section('content')

    <div class="all-title-box bg1"  >

        <div class="container text-center">

            <h1>User Panel<span></span></h1>
        </div>
    </div>
    <br>



<div class="row container-fluid">
    <div class="col-md-4">
    <div class="section-title">
    <h3 class="title">User Menu</h3>
        @include('home.user.usermenu')
    </div>



    </div>


        <div class="col-md-8">
            <div class="contact_form">
                <div id="message">
                <h2 class="title">User Profile</h2>
                </div>
                <div class="input-checkbox">
                    @include('profile.show')
                </div>
            </div>
        </div>
        <div class="col-xl-4col-md-4 col-sm-4">

        </div>


    <br>
</div>
@endsection
