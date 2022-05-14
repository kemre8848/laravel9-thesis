@extends('layouts.adminbase')
@section('title', 'Add Category')



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
                                <li class="breadcrumb-item" ><a href={{route('admin.index')}}">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
                            </o1>
                        </nav>
                    </div>
                <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Add Category</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Title</label>
                                        <input type="text" name="title" class="form-control" id="basic-default-fullname" placeholder="Title">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Keywords</label>
                                        <input type="text" name="keywords" class="form-control" id="basic-default-company" placeholder="Keywords">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-email">Description</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="description" id="basic-default-email" class="form-control" placeholder="Description">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Status</label>
                                        <select id="defaultSelect" name="status" class="form-select">
                                            <option >True</option>
                                            <option >False</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send</button>
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
