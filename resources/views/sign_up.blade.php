@extends('layout.app')

@section('content')
<h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>

<form method="POST" action="{{ route('sign_up') }}">
@csrf
	<p><input type="text" name="first_name" placeholder="name"></p>
	<p><input type="text" name="last_name" placeholder="surname"></p>
	<p><input type="e-mail" name="email" placeholder="email"></p>
	<p><input type="password" name="password" placeholder="password"></p>
	<p><input type="submit" name="reg" value="Регистрация" class="login">
	<a href="sign_in.php">Войти</a></p>
</form>
@endsection