@extends('layouts.adminbase')
@section('title', 'Edit Category')



@section('content')
    <!-- Content -->


    <!--<div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item" href="/admin">Home</li>
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section> -->


            <div class="col-12 grid margin stretched-card">
                <div class="card-header">
                   <h3 class="card-title">Form Elements</h3>
                    <div class="page-header" >
                        <nav aria-label="breadcrumb">
                            <o1 class="breadcrumb" style="justify-content:right">
                                <li class="breadcrumb-item" ><a href="/admin">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                            </o1>
                        </nav>
                    </div>
                <form role="form" action="/admin/category/update/{{$data->id}}" method="post">
                    @csrf
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Edit Category: {{$data->title}}</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Title</label>
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Keywords</label>
                                        <input type="text" name="keywords" class="form-control" id="basic-default-company" value="{{$data->keywords}}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-email">Description</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="description" id="basic-default-email" class="form-control" value="{{$data->description}}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Status</label>
                                        <select id="defaultSelect" name="status" class="form-select">
                                            <option selected >{{$data->status}}</option>
                                            <option >True</option>
                                            <option >False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                    <button class="btn btn-dark">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>

        </section>
    <!-- / Content -->
@endsection
