@extends('layouts.master')

@section('title', '¿Que ssd comprar? - RankingSSD')

@section('bodyclass', 'mainpage')

@section('content')

	@include('includes.headerextended')

	<div class="page">

		<div class="limit">

			<div class="grid">

				<div class="content">

					<div class="note">
						<p>En RankingSSD te lo enseñamos y te ayudamos a elegir, valoramos los más populares y los más vendidos del momento, ¿Merecen todos la pena?</p>
					</div>

					<div class="content-inner">

						@include('includes.loop')

						<p class="description">Los discos SSD están ya aquí y se quedarán muchos años entre nosotros, son la realidad de un mercado del almacenamiento estancado durante años y muy necesitado de innovaciones. Silencio, menor consumo y velocidad, todo ello ha llegado de la mano de los SSD consolidándose muy rápidamente en el mercado doméstico. Te enseñamos todos los secretos de esta tecnología y analizamos los distintos modelos para que sepas que hay, y que comprar.</p>

					</div>

				</div>

				@include('includes.sidebar')

			</div>

		</div>

	</div>

@endsection