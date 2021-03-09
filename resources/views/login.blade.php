@extends('master')
@section('content')

<h1>Login</h1>
{{-- @if($errors->any())
@foreach ($errors->all() as $err)
    <li style="background-color: red">{{ $err }}</li>
@endforeach
@endif --}}
{{-- <form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Username" value="{{ old('username') }}"> <br>
    <span style="color: red" class="txt txt-danger">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="Enter Password" value="{{ old('password') }}"> <br>
    <span style="color: red">@error('password'){{$message}}@enderror</span><br>
    <button type="submit" class="btn btn-primary">Login</button>
</form> --}}

<div class="container login">
    <div class="row">
        <div class="col-sm-4">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div> <br> 
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection