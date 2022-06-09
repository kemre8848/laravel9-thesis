@extends('layouts.home')


@section('title' , 'User Comments')




@section('content')

    <div class="all-title-box bg1"  >

        <div class="container text-center">

            <h1>User Comments<span></span></h1>
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
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Project</th>
                    <th>Subject</th>
                    <th>Review</th>
                    <th>Rate</th>
                    <th>Status</th>
                    <th style="width: 40px">Delete</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($comments as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td><a href="{{route('project',['id'=>$rs->project_id])}}">{{$rs->project->title}}<a/></td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->status}}</td>


                        <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-sm btn-danger">Delete</a> </td>
                    </tr>

                @endforeach



                </tbody>
            </table>
        </div>
        <div class="col-xl-4col-md-4 col-sm-4">

        </div>


    <br>
</div>
@endsection
