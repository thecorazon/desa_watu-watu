@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))
        <div class="alert alert-success alert-block">{{$meassage}}</div>
        @endif
        <h6 class="mb-4">Banner Form</h6>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $key=>$results)
                <tr>
                    <th>{{$key+1}}</th>
                    <th>{{$results->Titel}}</th>
                    <th>
                        <img src="BannerPics/{{$results->Photo}}" width="50" >
                    </th>
                    <th>
                        <a class="btn btn-success bi bi-pen" href="/update/{{$results->id}}"></a>
                    </th>
                    <th>
                        <a class="btn btn-danger bi bi-trash" href="/deleted/{{$results->id}}"></a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection