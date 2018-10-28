@extends('layouts.front')
@section('content')
<main class="signin-back">
    <section class="back-blur">
            <article class="signin container">
            <h3>Crea una cuenta</h3>
                    <form class="signin-form" action="" method="post">
                        @csrf 
                            <div class="signin-group-form">
                                    <label for="nombre">Nombre</label>
                            <input class="form-input {{ $errors->has('nombre') ? ' Nombre Invalido' : '' }}" type="text" id="nombre" value="{{ old('nombre') }}" name="nombre">

                            @if ($errors->has('nombre'))
                                <span>
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif

                            </div>

                            <div class="signin-group-form">
                                        <label for="apellido">Apellido</label>
                                        <input class="form-input {{ $errors->has('apellido') ? ' Apellido Invalido' : '' }}" type="text" id="apellido" value="{{ old('apellido') }}" name="apellido">
                                            @if ($errors->has('apellido'))
                                            <span>
                                                    <strong>{{ $errors->first('apellido') }}</strong>
                                            </span>
                                        @endif
                            </div>

                            <div class="signin-group-form">
                                        <label for="email">Email</label>
                                <input class="form-input {{ $errors->has('email') ? ' Email Invalido' : '' }}" type="email" id="email" value="{{ old('email') }}" name="email">
                                                @if ($errors->has('email'))
                                                <span>
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                        </div>
                        
                        <div class="signin-group-form">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                        <span>
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                </div>

                                <div class="signin-group-form">
                                    <label for="password-confirm">Confirmar Password</label>
                                    <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required>                     
                                </div>



                            <button class="form-row form-button" type="submit" name="send-signin">Crear cuenta</button>
                    </form>
            </article>
            <!-- fin <article class="signin container"> -->
    </section>
</main>
@endsection