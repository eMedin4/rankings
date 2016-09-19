				
@foreach ($products as $product)

<article>

	<div class="flex-h">

		<div class="grid-image">
			<img src="{{asset('/assets/images') . $product->image}}">
		</div>

		<div class="grid-data">
			<h3>{{$product->title}} {{$product->size_format}}</h3>
			<div><h4>Capacidad</h4><p>{{$product->size_format}}</p></div>
			<div><h4>Modelo</h4><p>{{$product->model}}</p></div>
			<div><h4>Formato</h4><p>{{$product->format}}</p></div>
		</div>

	</div>

	<div class="grid-stats">

		<table class="stats">
			<tr>
				<td>Rendimiento general</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->speed['class']}}"></span>
					</span>
				</td>
				<td>{{$product->speed['value']}}<i>%</i></td>
			</tr>
			<tr>
				<td>Velocidad de lectura</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->read['class']}}"></span>
					</span>
				</td>
				<td>{{$product->read['value']}}<i>MB/s</i></td>
			</tr>
			<tr>
				<td>Velocidad de escritura</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->write['class']}}"></span>
					</span>
				</td>
				<td>{{$product->write['value']}}<i>MB/s</i></td>
			</tr>
			<tr>
				<td>Popularidad<span>Cuota de mercado</span></td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->popularity['class']}}"></span>
					</span>
				</td>
				<td>{{$product->popularity['value']}}<i>%</i></td>
			</tr>
		</table>		
		
	

	</div>

	<div class="grid-rank">

		<table class="rank">

			<tr>
				<td><p>€{{$product->price['integer']}},{{$product->price['decimal']}}</p></td>
				<td>Amazon</td>
			</tr>

			<tr>
				<td><p class="bar-percent-{{$product->price_relative['class']}}">€{{$product->price_relative['value']}}</p></td>
				<td>€/GB</td>
			</tr>

			<tr>
				<td>
					@if($product->ranking > 85)
						<p class="item-value-4"><i class="fa fa-check-oi"></i><i class="fa fa-check-oi extra"></i></p>
					@elseif($product->ranking >70)
						<p class="item-value-3"><i class="fa fa-check-oi"></i></p>
					@elseif($product->ranking >60)
						<p class="item-value-2"><i class="fa fa-minus"></i></p>
					@else
						<p class="item-value-1"><i class="fa fa-x"></i></p>
					@endif
				</td>
				<td>Valoración</td>
			</tr>

		</table>

	</div>

</article>

@endforeach