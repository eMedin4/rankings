				
@foreach ($products as $product)

<article>

	<div class="flex-h">

		<div class="grid-image">
			<a href="{{$product->url}}"><img src="{{asset('/assets/images') . $product->image}}"></a>
		</div>

		<div class="grid-data">
			<h3><a href="{{$product->url}}">{{$product->title}} {{$product->size_format}}</a></h3>
			<div class="flex-h">
				<div>
					<div><h4>Modelo</h4><p>{{$product->model}}</p></div>
					<div><h4>Capacidad</h4><p>{{$product->size_format}}</p></div>
					<div><h4>Formato</h4><p>{{$product->format}}</p></div>
				</div>
				<div>
					<a class="amazon-btn" href="{{$product->url}}">Amazon<span>{{$product->price['integer']}},{{$product->price['decimal']}}</span> €</a>
				</div>
			</div>
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
				<!-- *** -->
				<td>Popularidad</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->popularity['class']}}"></span>
					</span>
				</td>
				<td>{{$product->popularity['value']}}<i>%</i></td>
			</tr>
			<tr>
				<td>Velocidad de lectura</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->read['class']}}"></span>
					</span>
				</td>
				<td>{{$product->read['value']}}<i>MB/s</i></td>
				<!-- *** -->
				<td>€/1GB</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->price_relative['class']}}"></span>
					</span>
				</td>
				<td>{{$product->price_relative['value']}}<i>€</i></td>		
			</tr>
			<tr>
				<td>Velocidad de escritura</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->write['class']}}"></span>
					</span>
				</td>
				<td>{{$product->write['value']}}<i>MB/s</i></td>
				<!-- *** -->
				<td>Valoración</td>
				<td>
					<span class="bar-stat">
						<span class="bar-percent bar-percent-{{$product->ranking['class']}}"></span>
					</span>
				</td>
				<td>{{$product->ranking['value']}}<i>/10</i></td>
			</tr>
		</table>		
		
	

	</div>

<!-- 	<div class="grid-rank">

		<table class="rank">

			<tr>
				<td><p><a href="{{$product->url}}">€{{$product->price['integer']}},{{$product->price['decimal']}}</a></p></td>
				<td><a href="{{$product->url}}">Amazon</a></td>
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

	</div> -->

</article>

@endforeach