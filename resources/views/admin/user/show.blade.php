@extends('layouts.adminwindow')
@section('title', 'User Detail')



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
        <h5 class="card-header">Detail User Data</h5>
        <div class="table-responsive ">
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
                    <th>Email</th>
                    <td>{{$data->email}}</td>
                </tr>
                <tr>
                    <th>Subject</th>
                    <td>{!! $data->subject !!}</td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        @foreach($data->roles as $role)
                            {{$role->name}}
                        <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id ])}}" class="btn btn-sm btn-danger">[x]</a>

                        @endforeach
                    </td>
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
                    <th>Add Role to User</th>
                    <td>
                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                            @csrf
                        <select name="role_id">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach


                        </select>
                            <button type="submit" class="btn btn-primary">Add Role</button>
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
