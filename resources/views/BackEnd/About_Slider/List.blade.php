@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))
        <div class="alert alert-success alert-block meassagealert" >{{$meassage}}</div>
        @endif
        <h2 class="mb-4 center">About Slider List</h2>
        <a href="{{route('Trash/list')}}" id="allbuttons" class="btn btn-danger">Go To Trash List</a>
        <a href="{{route('Abhout/Slider/Form')}}" id="allbuttons" class="btn btn-success" style="float: right;">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Position</th>
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
                    <td>{{$datas->Position}}</td>
                    <td>{{$datas->About}}</td>
                    <td>
                        <a href="/Abhout/Slider/Edit/{{$datas->id}}" id="allbuttons" class="bi bi-pen btn btn-success"></a>|
                        <a href="/Abhout/Slider/Delete/{{$datas->id}}" id="allbuttons" class="bi bi-trash btn btn-danger"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



    </div>
</div>

@endsection