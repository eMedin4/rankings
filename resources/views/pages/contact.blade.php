@extends('layouts.master')

@section('title', 'Aviso Legal')

@section('bodyclass', 'contact')

@section('content')

	@include('includes.header')

	<div class="page">

		<div class="limit">

			<div class="grid">

				<div class="content-static">


					<div class="contact-form">

						<h1>Contácto</h1>
						<div class="contact-text">
							@if (count($errors) > 0)
						            @foreach ($errors->all() as $error)
						                <p class="error">{{ $error }}</p>
						            @endforeach
							@else
								<p>Rellena el formulario para contactar con nosotros y te contestaremos lo antes posible en tu email</p>
							@endif
						</div>
						
						<form method="POST" action="{{route('postcontact')}}">{!! csrf_field() !!}
							<div class="group-form">
								<label for="name">Nombre</label><!-- 
								 --><input type="text" name="name" maxlength="50" value="{{ old('name') }}">		
							</div>
							<div class="group-form">						
								<label for="email">Email</label><!-- 
								 --><input type="email" name="email" maxlength="255" value="{{ old('email') }}">
							</div>
							<div class="group-form">		
								<label for="comment">Comentario</label><!-- 
								 --><textarea name="comment" rows="8" maxlength="5000">{{ old('comment') }}</textarea>
							</div>
							<div class="group-form">		
								<button type="submit" class="btn">Enviar</button>
							</div>
						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

@endsection
