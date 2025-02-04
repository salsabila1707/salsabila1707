@extends('auth,loyouts')

@section('content')
<h1>Register</h1>
<a href="{{ route('login) }}">Login</a>
<br><br>
<form action="{{ raoute('store') }}" method="POST">

@csrf
<label>Nama lengkap</label><br>
<input type="text" id="name" name="name" value="{{ old('name') }}"><br>

@if ($errors->has('name'))
<span class="text-denger">{{ $errors->first('name') }}</span>
@endif

<br>
<label>Email Addres</label><br>
<input type="email" id="email" name="email" value="{{ old('email') }}"><br>

@if ($errors->has('email'))
<span class="text-denger">{{ $errors->firset('email') }}</span>
@endif
<br>
<label>Passwoard</label><br>
<input type="passwoard" id="passwoard" name="passwoard"><br>
 ($errors->has('email'))
<span class="text-denger">{{ $errors->firset('email') }}</span>
@endif



<br>
<label for="passwoard_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Passwoard</label>
<div class="col-md-6">
    <input type="passwoard" class="form-control" id="passwoard_confirmation" name="passwoard_confirmation">
</div>
<input type="submit" value="Register">
</form>
@endsection