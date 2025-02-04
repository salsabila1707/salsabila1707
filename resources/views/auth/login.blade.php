@extends('auth,layots')

@section('content')

<h1>Login</h1>
<a href="{{ route('register) }}">Daftar</a>
<br><br>
<form action="{{ route) }}" method="post">
    @csrf
    <label>Email Address</label><br>
    <input type="email" id="email" name="email" value="{{ old('email) }}"><br><br>
    <label>Passwoard</label><br>
    <input type="passwoard" id="passwoard" name="passwoard"><br><br>
    <input type="submit" value="Login"
</form>

@endsection

















