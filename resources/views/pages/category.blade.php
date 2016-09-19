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
						<h1>{{$title}}</h1>
						<h2>El SSD barato de Samsung</h2>	
						<p>{{$description}}</p>	
					</div>

					@include('includes.loop');

				</div>

				@include('includes.sidebar')

			</div>

		</div>

	</div>

@endsection