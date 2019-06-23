@extends('layout')

@section('title', 'Index')


@section('header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Library</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">Lista de usuarios</li>
        </ol>
    </nav>
@endsection

@section('content')
    
    <a href=" {{ route('users.create') }} " class="btn btn-success">Crear usuario</a>
    <hr>

    <table class="table table-dark">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Email</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center">{{ $user->id }}</td>
                    <td >{{ $user->name }}</td>
                    <td >{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            {{-- @method('DELETE') --}}
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection