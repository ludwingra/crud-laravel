@extends('layout')

@section('title', 'Index')

@section('header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de usuarios</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="jumbotron">

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter name">
            </div>
            <button class="btn btb-info" type="submit">Guardar</button>
        </form>

    </div>
@endsection