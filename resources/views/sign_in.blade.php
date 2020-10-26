
@extends('layout.app')

@section('content')
<h1 class="h3 mb-3 font-weight-normal">Вход</h1>
<form method="POST" action="{{ route('sign_in') }}">
@csrf
	<p><input type="e-mail" name="email" placeholder="email"></p>
	<p><input type="password" name="password" placeholder="password"></p>
	<p><input type="submit" name="log_in" value="Войти" class="login">
	<a href="sign_up.php">Регистрация</a></p>
</form>
@endsection