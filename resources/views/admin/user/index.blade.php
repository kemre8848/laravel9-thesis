@extends('layouts.adminbase')
@section('title', 'User List')



@section('content')
    <!-- Content -->

    <!--<div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Category List</h4>-->
    <div class="container-xxl flex-grow-1 container-p-y">

    <div class="content">
        <div class="col sm-6">
            <ol class="breadcrumb" style="justify-content:right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">User List</li>
            </ol>
            <!-- Basic Layout & Basic with Icons -->
            <div class="card">

            </div>
            <div class="row">
                <!-- Basic Layout -->



                <div class="card">
                    <h5 class="card-header">User List</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>

                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>
                                        @foreach ($rs->roles as $role)
                                                    {{$role->name}}
                                        @endforeach
                                    </td>

                                    <td><a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-sm btn-success"
                                    onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">Show</a> </td>
                                    <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" class="btn btn-sm btn-danger">Delete</a> </td>
                                </tr>

                            @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">#</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                </ul>
        </div>
    </div>


    <!-- / Content -->
@endsection
