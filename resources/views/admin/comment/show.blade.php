@extends('layouts.adminwindow')
@section('title', 'Show Comment')



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
                    <div class="page-header" >




    <div class="card">
        <h5 class="card-header">Detail Message Data</h5>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>

                <tr>
                    <th>Project</th>
                    <td>{{$data->project->title}}</td>
                </tr>
                <tr>
                    <th>Name & Surname</th>
                    <td>{{$data->user->name}}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{!! $data->subject !!}</td>
                </tr>
                <tr>
                    <th>Review</th>
                    <td>{{$data->review}}</td>
                </tr>
                <tr>
                    <th>Rate</th>
                    <td>{{$data->rate}}</td>
                </tr>
                <tr>
                    <th>Ip Number</th>
                    <td>{{$data->IP}}</td>
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
                <tr>
                    <th>Admin Note :</th>
                    <td>
                        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                            @csrf
                        <select name="status">
                            <option selected>{{$data->status}}</option>
                           <option>True</option>
                            <option>False</option>
                        </select>

                            <button type="submit" class="btn btn-primary">Update Comment</button>
                            </form>
                    </td>

                </tr>

                </thead>
            </table>
        </div>
    </div>
    </div>
                </div>
            </div>
    </div>

        </section>
    <!-- / Content -->
@endsection
