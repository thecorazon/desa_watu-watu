@extends('BackEnd/commen')
@section('commenfile')


<div class="col-sm-3"></div>
<div class="col-sm-8" style="margin-top:50px;">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">User Form</h6>
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{old('name')}}" name="name" id="inputEmail3" placeholder=" Name">
                    @error('name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" id="inputEmail3" placeholder=" E-mail">
                    @error('email')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"  id="gridRadios1" value="Maile" checked>

                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"  id="gridRadios2"  value="Femail">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gridRadios2"  value="Other">
                        <label class="form-check-label" for="gridRadios2">
                            Other
                        </label>
                    </div>
                    @error('gender')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" value="{{old('password')}}" id="inputPassword3" placeholder=" Password">
                        @error('password')
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Subject" value="{{old('Subject')}}" id="inputPassword3" placeholder=" Subject">
                        @error('Subject')
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Message" value="{{old('Message')}}" id="inputPassword3" placeholder=" Message">
                        @error('Message')
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="photo" id="inputEmail3" placeholder="Chuse file">
                        @error('photo')
                        <p style="color:red;">{{$message}}</p>
                        @enderror
                    </div>
                </div>


            </fieldset>
            <button type="submit" class="btn btn-primary col-sm-2">Send Data</button>
        </form>
    </div>
</div>

@endsection