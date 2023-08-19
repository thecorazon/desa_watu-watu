

@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    
<div class="bg-secondary rounded h-100 p-4">
    @if($meassage=Session::get('success'))
    <div class="alert alert-success alert-block">{{$meassage}}</div>
    @endif
    <h6 class="mb-4">About List</h6>
    <a href="{{url('/Force/List')}}" class="btn btn-danger">Go To Force List</a>
    <a href="{{url('/About/Form')}}" style="float:right;" class="btn btn-info">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>About</th>
                    <th>List</th>
                    <th>Descreptions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$datas)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>
                    <img src="/image/{{$datas->Photo}}" width="100px">
                    </td>
                    <td>{{$datas->Title}}</td>
                    <td>{{$datas->About}}</td>
                    <td>{{$datas->List}}</td>
                    <td>{{$datas->Descreptions}}</td>
                    <td>
                        <a href="/updated/About/{{$datas->id}}" class="bi bi-pen btn btn-dark"></a>|
                        <a href="/deleted/About/{{$datas->id}}" class="bi bi-trash btn btn-danger"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection