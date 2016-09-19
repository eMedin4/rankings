@extends('layouts.master')

@section('title', 'Pelicula')

@section('bodyclass', 'category')

@section('content')

	@include('includes.header')

	<div class="page">

		<div class="limit">

			<div class="grid">

				<div class="content">

					<div class="content-text">
						<h1>{{$content['h1']}}</h1>
						<h2>{{$content['h2']}}</h2>	
						<p>{{$content['p']}}</p>	
					</div>

					@include('includes.loop');

				</div>

				@include('includes.sidebar')

			</div>

		</div>

	</div>

@endsection