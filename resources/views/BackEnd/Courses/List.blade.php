@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))
        <div class="alert alert-success alert-block">{{$meassage}}</div>
        @endif
        <h6 class="mb-4">Courses Form</h6>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Title</th>
                    <th>Descreptions</th>
                    <th>Sulg</th>
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
                    <td>{{$datas->Title}}</td>
                    <td>{{$datas->Descreptions}}</td>
                    <td>{{$datas->Sulg}}</td>
                    <td>
                        <a href="/Courses/Edit/{{$datas->id}}" class="bi bi-pen btn btn-dark"></a>|
                        <a href="/Courses/Delete/{{$datas->id}}" class="bi bi-trash btn btn-danger"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>



    </div>
</div>

@endsection