<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="¡ACÁ escribir máximo 160 caracteres!">
    <meta name="author" content="Nicolas Mosi, Juan Spada, Francis ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/nico.css">
    <link rel="stylesheet" href="css/juan.css">
    <link rel="stylesheet" href="css/francis.css">
    <link rel="icon" href="storage/img/favicon.png" type="image/gif" sizes="30x30"> 
    <header>
    <section class="header-top">
        <article class="contenedor-logo-header">
        <img src="storage/img/favicon.png" alt="">
        </article>
        <nav>
        <ul class="nav-principal"><!--Nav principal es el de la izq-->
            <li><a href="/">Home</a></li>
            <li><a href="/">¿Quienes Somos?</a></li>
            <li><a href="/">Productos</a></li>
            <li><a href="/faq">Ayuda</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
        <ul class="nav-secundario"><!--El nav secundario es el de los botones de ingreso y registro -->
        {{-- hace referencia a si esta conectado o no --}}
        @guest
            <li><a href="/login"><i class="fas fa-sign-in-alt"></i>Ingresar</a></li>
            <li><a href="/register"><i class="fas fa-user-plus"></i>Registrarme</a></li>
        {{-- esta conectado o no --}}
        @else
            <li><a href="/perfil"><i class="fas fa-user-cog"></i>
            {{Auth::user()->nombre}}
            </a></li>
            <li><a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form></li>
        @endguest
        </ul>
        </nav>
        <article class="contenedor-btn-header">
        <button onclick='toggleMenu()'><i class="fas fa-bars"></i></button>
        <script>
            function toggleMenu() {
            var x = document.getElementById("side-navbar");
            
            if (x.style.display === "none") {
                x.style.transition = "0.5s";
                x.style.display = "flex";
            } else {
                x.style.display = "none";
            }
            
        }
        </script>
        </article>
    </section>
    <section id="side-navbar">
        <ul class="nav-principal"><!--Nav principal es el de la izq-->
            <li><a href="index.php">Home</a></li>
            <li><a href="">¿Quienes Somos?</a></li>
            <li><a href="">Productos</a></li>
            <li><a href="faq.php">Ayuda</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        {{-- hace referencia a si esta conectado o no? --}}
            <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Ingresar</a></li>
            <li><a href="registro.php"><i class="fas fa-user-plus"></i>Registrarme</a></li>
        {{-- esta conectado --}}
            <li><a href="userProfile.php"><i class="fas fa-user-cog"></i>nombre</a></li>
            <li><a href="logout.php"><i class="fas fa-user-times"></i>Salir</a></li>
        </ul>
    </section>
    </header>

    @yield ('content')


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<footer>
        <section>
          <article class="nav-footer">
            <h3>LOGO</h3>
            <ul>
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a href="">¿Quienes Somos?</a>
              </li>
              <li>
                <a href="">Productos</a>
              </li>
              <li>
                <a href="faq.php">Ayuda</a>
              </li>
              <li>
                <a href="">Contacto</a>
              </li>
            </ul>
          </article>
          <article class="footer-datos-contacto">
            <h3>Objetctive Food</h3>
            <p>Teléfono: +54 911 3934 2713</p>
            <p>Email: ventas@objectivefood.com</p>
            <p>Lugar: Monroe 860, Belgrano</p>
          </article>
          <article class="footer-redes">
                <p>Powered By</p>
                <p>Francis, Nico y Juan</p>
                <ul>
                    <li><a href="https://api.whatsapp.com/send?phone=5491139342713&text=Hola%20Juan"><img src="storage/img/WP-ICON.png" alt="Whats App"></a></li>
                    <li><a href="https://www.facebook.com/"><img src="storage/img/FB-CION.png" alt="Facebook"></a></li>
                    <li><a href="https://www.linkedin.com/"><img src="storage/img/IG-ICON.png" alt="Instagram"></a></li>
                    <li><a href="https://twitter.com/"><img src="storage/img/TW-ICON.png" alt="Twitter"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="storage/img/IN-ICON.png" alt="Linkedin"></a></li>
                </ul>
          </article>
        </section>
        <section>
          <article>
            <p>© Copyright 2018 Objective Food - All rights Reserved</p>
          </article>
        </section>
              </footer>      
</html>
