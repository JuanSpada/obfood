@extends('layouts.front')
@section('content')
    <main>
        <section class="banner">
          <article class="banner-blur">
          </article>
          <article class="contenedor-titulo">
            <h1>Objective Food</h1>
            <h3>Tu vianda, tus objetivos.</h3>
          </article>
        </section>
        <section class="contenedor-principal">
          <article class="estas-buscando">
            <h4>¿Que estás buscando?</h4>
            <br>
            <p>Contanos un poco sobre tus <strong><em>objetivos</em></strong> y armaremos un plan adaptado a tus <strong><em>gustos</em></strong> y <strong><em>necesidades</em></strong>.</p>
          </article>
          <article class="contenedor-objetivos">
      
            <div class="obj1-home objetivo">
              <a href=""><img src="storage/img/muscles.png" alt="Entrenar"></a>
              <p>Entrenar</p>
            </div>
            <div class="obj3-home objetivo">
              <a href=""><img src="storage/img/waist.png" alt=""></a>
              <p>Adelgazar</p>
            </div>
            <div class="obj2-home objetivo">
              <a href=""><img src="storage/img/salad.png" alt=""></a>
              <p>Viandas Especificas</p>
            </div>
            <div class="obj4-home objetivo">
              <a href=""><img src="storage/img/meat.png" alt=""></a>
              <p>Viandas Comunes</p>
            </div>
          </article>
          <article class="pasos">
            <h3>¿Cómo consigo mis viandas? </h3>
            <div class="paso1 paso"><p>1</p>Registrate e Ingresa a tu cuenta...</div>
            <div class="paso2 paso"><p>2</p>Elegí tu tipo de vianda y sus ingredientes...</div>
            <div clas= "paso3 paso"><p>3</p>Decidí que medio de pago vas a usar...</div>
            <div clas= "paso4 paso"><p>4</p>¡Lísto! Pagás y recibis la vianda en tu casa.</div>
            <div class="contenedor-btn-diseñar"><a href="#">Diseñar mi vianda</a></div>
          </article>
        </section>
        <section class="contenedor-main-pasos">
        </section>
      </main>
@endsection
