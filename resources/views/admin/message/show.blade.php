@extends('layouts.adminwindow')
@section('title', 'Show Message')



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
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <td>{{$data->id}}</td>
                </tr>

                <tr>
                    <th>Name & Surname</th>
                    <td>{{$data->name}}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{$data->phone}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{!! $data->subject !!}</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{$data->message}}</td>
                </tr>
                <tr>
                    <th>Ip Number</th>
                    <td>{{$data->ip}}</td>
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
                        <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                            @csrf
                        <textarea  cols="70" id="note" name="note">{{$data->note}}</textarea>
                            <button type="submit" class="btn btn-primary">Update Note</button>
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
