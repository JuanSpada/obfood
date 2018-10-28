@extends('layouts.front')
@section('content')

<main class="login-back">
  <section class="back-blur">
        <article class="login container">
            <h3>Ingresar</h3>

            <form class="" action="" method="post">
                <label for="account">Cuenta:</label>
                <input class="form-input form-row" type="text" id="account"  name="email" value="">
                  

                <label for="password">Contraseña:</label>
                <a href="recover.php">Olvidé mi Contraseña</a>
                <input class="form-input form-row" type="password" name="password" >
                  

                <input type="checkbox" name="remember"> 
                <label for="remember">Recordarme</label>
                <button class="form-row form-button" type="submit" id="send-login" name="submit">Ingresar</button>
            </form>
        </article>
  </section>
</main>

@endsection