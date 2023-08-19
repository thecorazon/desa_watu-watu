@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Courses Form</h6>
        <form method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                <img src="{{url('BannerPics/'.$editview->Photo)}}" width="50" >
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$result->Photo}}" name="exist_photo" id="inputEmail3">
                    <input type="file" class="form-control" value="{{$result->Photo}}" name="Photo" id="inputEmail3">
                    @error('Photo')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Title" value="{{$result->Title}}" id="inputEmail3" placeholder="Title">
                    @error('Title')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Descreptions</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Descreptions" value="{{$result->Description}}" id="inputEmail3" placeholder="Description">
                    @error('Descreptions')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Sulg</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Sulg" value="{{$result->Sulg}}" id="inputEmail3" placeholder="Sulg">
                    @error('Sulg')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary col-sm-2">Send Data</button>
        </form>
    </div>
</div>

@endsection