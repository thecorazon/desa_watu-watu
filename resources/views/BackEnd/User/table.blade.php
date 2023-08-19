@extends('BackEnd/commen')
@section('commenfile')


<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
      
        <div class="col-sm-2"></div>
        <div class="col-sm-10"  style="margin-top:50px;">
        @if($message=Session::get('success'))
        <p class="alert alert-success alert-block col-sm-8">{{$message}}</p>
        @endif
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">User Table
                <a href="{{url('/userform')}}" type="button" class="btn btn-danger btn btn-sm bi bi-bookmarks rounded-circle"></a>
                </h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Password</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($result as $key=>$data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->password }}</td>
                            <td>{{ $data->Subject }}</td>
                            <td>{{ $data->Message }}</td>
                            <td>
                                <img src="image/{{ $data->photo }}" class="rounded-circle" width="50px" height="50px" >
                            </td>
                            <td>
                                <a href="/userid/{{ $data->id }}" type="button" class="btn btn-success bi bi-pen rounded-circle"></a>
                            </td>
                            <td>
                                <a href="/delete/{{ $data->id }}" type="button" class="btn btn-danger bi bi-trash rounded-circle"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-sm-5">
                    {!! $result->links() !!}
                </div>
            </div>
        </div>

        @endsection