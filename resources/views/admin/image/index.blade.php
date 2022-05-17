@extends('layouts.adminwindow')

@section('title', 'Project Image Gallery')

@section('content')
    <!-- Content -->

    <!--<div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Category List</h4>-->


                <form role="form" action="{{route('admin.image.store',['pid'=>$project->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h2>{{$project->title}}</h2>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Title</label>
                                        <input type="text" name="title" class="form-control" id="basic-default-fullname" placeholder="Title">
                                    </div>


                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Send</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </form>



                <div class="card">
                    <h5 class="card-header">Project Image List</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="width: 40px">Delete</th>

                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>

                                    <td>
                                        @if($rs -> image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['pid'=>$project->id,'id'=>$rs->id])}}" class="btn btn-sm btn-danger">Delete</a> </td>
                                   </tr>

                            @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- / Content -->

