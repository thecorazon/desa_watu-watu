@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))
        <div class="alert alert-success alert-block">{{$meassage}}</div>
        @endif
        <h2 class="mb-4">Events Table</h6>
        <a href="{{route('Events/Trash')}}" class="btn btn-danger">Go To Trash Page</a>
        <a href="{{route('Event/Form')}}" id="allbuttons" class="btn btn-success" style="float: right;">Add</a>
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
                        <a href="/Events/Edit/{{$datas->id}}" class="bi bi-pen btn btn-dark"></a>|
                        <a href="/Events/Delete/{{$datas->id}}" class="bi bi-trash btn btn-danger"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection