@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h3 class="mb-4">Events Update Form</h3>
        <form method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" value="{{$result->Photo}}" name="hidden_file" id="inputEmail3">
                    <input type="file" class="form-control" value="{{$result->Photo}}" name="Photo" id="inputEmail3">
                    @error('Photo')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Name"value="{{$result->Name}}" id="inputEmail3" >
                    @error('Name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Posiction</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Posiction" value="{{$result->Posiction}}" id="inputEmail3" >
                    @error('Posiction')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">About </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="About" value="{{$result->About}}" id="inputEmail3" >
                    @error('About')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary col-sm-2">Send Data</button>
        </form>
    </div>
</div>

@endsection