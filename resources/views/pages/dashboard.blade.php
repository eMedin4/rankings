@extends('layouts.master')

@section('title', 'Pelicula')

@section('bodyclass', 'mainpage')

@section('content')

	<div class="dashboard-wrap">
	<table class="catalog">
		<thead>
			<tr>
				<th>Orden</th>
				<th>Disp</th>
				<th></th>
				<th>Asin</th>
				<th>Modelo</th>
				<th>Gb</th>
				<th>Titulo</th>
				<th>€</th>
				<th class="catalog-split">€/GB</th>
				<th>RANK</th>
				<th>Sp</th>
				<th>Po</th>
				<th>Read</th>
				<th>Write</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($products as $product)
			@if ($product->avaibility)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$product->avaibility}}</td>
					<td>{{$product->amz_order}}</td>
					<td>{{$product->id}}</td>
					<td>{{$product->model}}</td>
					<td>{{$product->size_total}}</td>
					<td>{{$product->title}}</td>
					<td class="catalog-split">{{$product->price['integer']}}</td>
					<td>{{$product->price_relative['value']}}</td>
					@if($product->stat)
					<td>{{$product->stat->ranking}}</td>
					<td>{{$product->stat->speed}}</td>
					<td>{{$product->stat->popularity}}</td>
					<td>{{$product->stat->read}}</td>
					<td>{{$product->stat->write}}</td>
					<td>{{$product->stat->image}}</td>
					@endif

				</tr>
			@endif
		@endforeach

		@foreach ($products as $product)
			@if (!$product->avaibility)
				<tr class="no-avaibility">
					<td>{{$loop->iteration}}</td>
					<td>{{$product->avaibility}}</td>
					<td>{{$product->amz_order}}</td>
					<td>{{$product->id}}</td>
					<td>{{$product->model}}</td>
					<td>{{$product->size}}</td>
					<td>{{$product->title}}</td>
					<td class="catalog-split">{{$product->price['integer']}}</td>
					@if($product->stat)
					<td>{{$product->stat->speed}}</td>
					<td>{{$product->stat->popularity}}</td>
					<td>{{$product->stat->read}}</td>
					<td>{{$product->stat->write}}</td>
					<td>{{$product->stat->image}}</td>
					@endif

				</tr>
			@endif
		@endforeach
		</tbody>
	</table>
	</div>

@endsection