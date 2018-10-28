
@extends('layouts.front')
@section('content')



<section class="perfil">
    <article>
        <img src="/storage/avatars/{{ $user->avatar }}" alt="Foto de perfil" style="max-width:100px">
    </article>
    
    <form action="/perfil" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ Auth::user()->nombre }}">
        <label for="nombre">Apellido:</label>
        <input type="text" name="apellido" value="{{ Auth::user()->apellido }}">
        <label for="nombre">Email:</label>
        <input type="email" name="email" value="{{ Auth::user()->email }}">
        <label for="nombre">Direccion:</label>
        <input type="text" name="direccion" value="{{ Auth::user()->direccion }}">
        <label for="nombre">Postal:</label>
        <input type="text" name="postal" value="{{ Auth::user()->postal }}">
        <input type="file" name="avatar" id="avatarFile">
        <button type="submit">Editar</button>

    </form>
</section>
@endsection
