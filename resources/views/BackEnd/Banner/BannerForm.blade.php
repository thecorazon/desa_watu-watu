@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Banner Form</h6>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Titel</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{old('Titel')}}" name="Titel" id="inputEmail3" placeholder=" Titel">
                    @error('Titel')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="Photo" value="{{old('Photo')}}" >
                    @error('Photo')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-sm-2">Send Data</button>
        </form>
    </div>
</div>

@endsection