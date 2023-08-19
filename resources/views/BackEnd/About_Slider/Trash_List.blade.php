@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        @if($meassage=Session::get('success'))

        <div class="alert alert-success alert-block meassagealert">{{$meassage}}</div>
        @endif
        <h5 class="mb-4">About Slider Trash List</h6>
            <a href="{{route('Abhout/Slider/List')}}" id="allbuttons" class="btn btn-success">Go To List</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>About</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $key=>$datas)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>
                            <img src="/image/{{$datas->Photo}}" width="60px">
                        </td>
                        <td>{{$datas->Name}}</td>
                        <td>{{$datas->Position}}</td>
                        <td>{{$datas->About}}</td>
                        <td>
                            <a href="/Abhout/Slider/Restore/{{$datas->id}}" class="btn btn-success" id="allbuttons">Restore</a>
                            <a href="/Abhout/Slider/ForceDelete/{{$datas->id}}" class="btn btn-danger" id="allbuttons">Delete</a>
                        </td>
                        <th>

                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>



    </div>
</div>

@endsection