@extends('layouts.adminbase')
@section('title', 'Category List')



@section('content')
    <!-- Content -->

    <!--<div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Category List</h4>-->
    <div class="container-xxl flex-grow-1 container-p-y">

    <div class="content">
        <div class="col sm-6">
            <ol class="breadcrumb" style="justify-content:right">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Category List</li>
            </ol>
            <!-- Basic Layout & Basic with Icons -->
            <div class="card">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary"> Add Categoy</a>
            </div> <br><br>
            <div class="row">
                <!-- Basic Layout -->



                <div class="card">
                    <h5 class="card-header">Category List</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th style="width: 40px">Edit</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>{{$rs->image}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-sm btn-primary">Edit</a> </td>
                                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-sm btn-danger">Delete</a> </td>
                                    <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-sm btn-success">Show</a> </td>
                                </tr>

                            @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- / Content -->
@endsection
