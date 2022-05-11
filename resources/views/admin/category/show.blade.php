@extends('layouts.adminbase')
@section('title', 'Show Category')



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

    <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-12 grid margin stretched-card">
                <div class="card-header">
                    <a href="/admin/category/edit/{{$data->id}}" class="btn btn-primary"> Edit</a>
                    <a href="/admin/category/destroy/{{$data->id}}" class="btn btn-danger"> Delete</a>
                    <div class="page-header" >
                        <nav aria-label="breadcrumb">
                            <o1 class="breadcrumb" style="justify-content:right">
                                <li class="breadcrumb-item" ><a href="/admin">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show Category</li>
                            </o1>
                        </nav>
                    </div>
                </div>
            </div>

    <div class="card">
        <h5 class="card-header">Detail Data</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{$data->title}}</td>
                </tr>
                <tr>
                    <th>Keywords</th>
                    <td>{{$data->keywords}}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$data->status}}</td>
                </tr>
                <tr>
                    <th>Created Date</th>
                    <td>{{$data->created_at}}</td>
                </tr>
                <tr>
                    <th>Update Date</th>
                    <td>{{$data->updated_at}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

        </section>
    <!-- / Content -->
@endsection
