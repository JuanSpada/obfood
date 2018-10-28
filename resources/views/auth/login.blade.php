@extends('layouts.front')
@section('content')

<main class="login-back">
  <section class="back-blur">
        <article class="login container">
            <h3>Ingresar</h3>

            <form class="" action="" method="post">
                @csrf

                <label for="email">Email:</label>
                <input class="form-input form-row {{ $errors->has('email') ? ' invalido' : '' }}" name="email" value="{{ old('email') }}" type="email" id="email"  name="email">
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <label for="password">Contraseña:</label>
                <a href="recover.php">Olvidé mi Contraseña</a>
                <input class="form-input form-row {{ $errors->has('password') ? ' invalida' : '' }}" type="password" name="password" >
                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
                <button class="form-row form-button" type="submit" id="send-login" name="submit">Ingresar</button>
            </form>
        </article>
  </section>
</main>

@endsection