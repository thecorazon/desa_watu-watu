@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h3 class="mb-4">Events Form</h3>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="Photo" id="inputEmail3">
                    @error('Photo')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Name" value="{{old('Name')}}" id="inputEmail3" placeholder="Name">
                    @error('Name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Posiction</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Posiction" value="{{old('Posiction ')}}" id="inputEmail3" placeholder="Posiction">
                    @error('Posiction')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">About </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="About" value="{{old('About')}}" id="inputEmail3" placeholder="About">
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