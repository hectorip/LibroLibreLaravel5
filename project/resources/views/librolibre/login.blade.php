@extends('librolibre.layout')

@section('content')
    
    <form action="login" method="POST">
        <input type="text" placeholder="username/email">
        <input type="password" placeholder="password">
        <input type="submit" value="Entrar">
    </form>

@stop