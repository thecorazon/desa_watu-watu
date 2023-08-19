@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">About Form</h6>
        <form method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="hidden_photo" value="{{$result->Photo}}" >
                    <input type="file" class="form-control" name="Photo"  >
                    @error('Photo')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$result->Title}}" name="Title" id="inputEmail3" placeholder=" Title">
                    @error('Title')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">About</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="About" value="{{$result->About}}" id="inputEmail3" placeholder="About">
                    @error('About')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>      
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">List</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="List" value="{{$result->List}}" id="inputEmail3" placeholder="List">
                    @error('List')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Descreptions</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Descreptions" value="{{$result->Descreptions}}" id="inputEmail3" placeholder="Description">
                    @error('Descreptions')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-sm-2">Send Data</button>
        </form>
    </div>
</div>

@endsection