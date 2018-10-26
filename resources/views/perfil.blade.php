@extends('layouts.front')
@section('content')
{{-- @dd(Auth::User()) --}}
    <section class="row justify-content-center">
            <section class="col-md-8">
                <section class="card">
                    <section class="card-header">Edita tu Perfil</section>

                    <section class="card-body">

                        <div class="profile-header-container">
                            <div class="profile-header-img">
                                <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" />
                                <!-- badge -->
                                <div class="rank-label-container">
                                    <span class="label label-default rank-label">{{$user->name}}</span>
                                </div>
                            </div>
                        </div>

                        <form action="/perfil" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Nombre y Apellido</label>

                                <div class="col-md-6">
                                <input id="name" type="txt" class="form-control{{ $errors->has('name') ? ' name vacío' : '' }}" name="name" value="{{Auth::User()->name}}" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' Error en el Email' : '' }}" name="email" value="{{Auth::User()->email}}" autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label for="direccion" class="col-sm-4 col-form-label text-md-right">Direccion</label>

                                    <div class="col-md-6">
                                    <input id="direccion" type="txt" class="form-control{{ $errors->has('direccion') ? ' Direccion Vacía ' : '' }}" name="direccion" value="{{Auth::User()->direccion}}" autofocus>

                                        @if ($errors->has('direccion'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('direccion') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label for="postal" class="col-sm-4 col-form-label text-md-right">Codigo Postal</label>

                                    <div class="col-md-6">
                                    <input id="postal" type="txt" class="form-control{{ $errors->has('postal') ? ' Codigo Postal Vacío ' : '' }}" name="postal" value="{{Auth::User()->postal}}" autofocus>

                                        @if ($errors->has('postal'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('postal') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
@endsection
