

@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))
        <div class="alert alert-success alert-block">{{$meassage}}</div>
        @endif
        <h6 class="mb-4">About Force List</h6>
         <a href="{{url('/About/List')}}" class="btn btn-success">Go To About List</a>
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
                        <a href="/Restore/About/{{$datas->id}}" class="btn btn-success">Restore</a>
                    </td>
                    <td>
                        <a href="/Force/Delete/{{$datas->id}}" onclick="return confirm('Are You Sure For Delete Row')" class="btn btn-danger">Force Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection