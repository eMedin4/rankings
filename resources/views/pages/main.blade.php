@extends('layouts.master')

@section('title', 'Pelicula')

@section('bodyclass', 'mainpage')

@section('content')

	@include('includes.headerextended')

	<div class="page">

		<div class="limit">

			<div class="grid">

				<div class="content">

<!-- 					<div class="content-text">

					</div> -->

					@include('includes.loop');

				</div>

				@include('includes.sidebar')

			</div>

		</div>

	</div>

@endsection