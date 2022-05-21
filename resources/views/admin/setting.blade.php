@extends('layouts.adminbase')
@section('title', 'Settings')



@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="content">
            <div class="col sm-6">
    <div class="col sm-6">
        <ol class="breadcrumb" style="justify-content:right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
    </div>
            </div>

            <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                @csrf
    <div class="col-xl-12">
        <h3 class="text-muted">Settings</h3>
        <div class="nav-align-top mb-4">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-general" aria-controls="navs-top-general" aria-selected="true">
                        General
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-smtpemail" aria-controls="navs-top-smtpemail" aria-selected="false">
                        Smtp Email
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-socialmedia" aria-controls="navs-top-socialmedia" aria-selected="false">
                        Social Media
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-aboutus" aria-controls="navs-top-aboutus" aria-selected="false">
                        About Us
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-contactpage" aria-controls="navs-top-contactpage" aria-selected="false">
                        Contact Page
                    </button>
                </li>
                <li class="nav-item">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-references" aria-controls="navs-top-references" aria-selected="false">
                        References
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-general" role="tabpanel">
                    <input type="hidden" name="id" value="{{$data->id}}" class="form-control">

                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Title</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Keywords</label>
                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Description</label>
                    <input type="text" name="description" value="{{$data->Title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Company</label>
                    <input type="text" name="company" value="{{$data->company}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Address</label>
                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Phone</label>
                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Email</label>
                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Status</label>
                        <select id="defaultSelect" name="status" class="form-select">
                            <option >True</option>
                            <option >False</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Icon</label>
                        <input class="form-control" type="file" id="icon" name="icon">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>

                <div class="tab-pane fade" id="navs-top-smtpemail" role="tabpanel">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Smtp Server</label>
                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Smtp Email</label>
                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Smtp Password</label>
                        <input type="text" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Smtp Port</label>
                        <input type="text" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>


                </div>
                <div class="tab-pane fade" id="navs-top-socialmedia" role="tabpanel">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Fax</label>
                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Facebook</label>
                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">instagram</label>
                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Twitter</label>
                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Youtube</label>
                        <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                <div class="tab-pane fade" id="navs-top-aboutus" role="tabpanel">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">About Us</label>
                        <textarea class="input-group input-group-merge" id="aboutus" name="aboutus">{!! $data->aboutus !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                <div class="tab-pane fade" id="navs-top-contactpage" role="tabpanel">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Contact</label>
                        <textarea class="input-group input-group-merge" id="contact" name="contact">{!! $data->contact !!}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                <div class="tab-pane fade" id="navs-top-references" role="tabpanel">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">References</label>
                        <textarea class="input-group input-group-merge" id="references" name="references">{!! $data->references !!}</textarea>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </div>
        </div>
    </div>
            </form>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#references' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
                ClassicEditor
                    .create( document.querySelector( '#aboutus' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
                ClassicEditor
                    .create( document.querySelector( '#contact' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>

@endsection
