@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))
        <div class="alert alert-success alert-block">{{$meassage}}</div>
        @endif
        <h3 class="mb-4">Events Trash Table</h3>
        <a href="{{route('Event/List')}}" class="btn btn-success">Go Back List Page</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Posiction</th>
                    <th>About</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$datas)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>
                        <img src="/image/{{$datas->Photo}}" width="60px" >
                    </td>
                    <td>{{$datas->Name}}</td>
                    <td>{{$datas->Posiction}}</td>
                    <td>{{$datas->About}}</td>
                    <td>
                        <a href="/Events/restore/{{$datas->id}}" class=" btn btn-success">Restore</a>|
                        <a href="/Events/forceDelete/{{$datas->id}}" class=" btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection