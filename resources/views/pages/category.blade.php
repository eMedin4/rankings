@extends('layouts.master')

@section('title', $content['h1'])
@section('metadescription', $content['meta'])

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
						{!!$content['p']!!}
					</div>

					<div class="loop">
						<time>Actualizado el {{$updated->formatLocalized('%e/%m/%y')}}</time>
						@include('includes.loop')
					</div>

					<div class="content-text-sub">
						<h2>disco duro ssd</h2>
						{!!$content['p2']!!}
					</div>

				</div>

				@include('includes.sidebar')				

			</div>
		</div>
	</div>

	@include('includes.footer')

@endsection
