@extends('layouts.master')

@section('title', 'Pelicula')

@section('bodyclass', 'mainpage')

@section('content')

	@include('includes.headerextended')

	<div class="page">

		<div class="limit">

			<div class="grid">

				<div class="content">
				<div class="content-text">
					<p>Los discos SSD están ya aquí y se quedarán muchos años entre nosotros, son la realidad de un mercado del almacenamiento estancado durante años y muy necesitado de innovaciones. Silencio, menor consumo y velocidad, todo ello ha llegado de la mano de los SSD consolidándose muy rápidamente en el mercado doméstico. Te enseñamos todos los secretos de esta tecnología y analizamos los distintos modelos para que sepas que hay, y que comprar.</p>
				</div>


					@include('includes.loop');

				</div>

				@include('includes.sidebar')

			</div>

		</div>

	</div>

@endsection