@extends('master')

@section('content')

<h2>Users</h2>

<a href="{{route('users.create')}}">Criar</a>

<hr>

<ul>
    @foreach($users as $user)
        <li>{{$user->name}} | <a href="{{route('users.edit', ['user' => $user->id])}}">Editar</a> | <a href="{{route('users.show', ['user' => $user->id])}}">Show</a>
        </li>
    @endforeach
</ul>

@endsection