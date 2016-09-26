				
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

		<div class="file file-1">

			<div>
				<div class="label">Rendimiento general</div>
				<div class="bar-stat"><span class="bar-percent bar-percent-{{$product->speed['class']}}"></span></div>
				<div class="value">{{$product->speed['value']}}<i>%</i></div>
			</div>

			<div>
				<div class="label">Velocidad de lectura</div>
				<div class="bar-stat"><span class="bar-percent bar-percent-{{$product->read['class']}}"></span></div>
				<div class="value">{{$product->read['value']}}<i>MB/s</i></div>
			</div>

			<div>
				<div class="label">Velocidad de escritura</div>
				<div class="bar-stat"><span class="bar-percent bar-percent-{{$product->write['class']}}"></span></div>
				<div class="value">{{$product->write['value']}}<i>MB/s</i></div>
			</div>

		</div>

		<div class="file file-2">

			<div>
				<div class="label">Popularidad</div>
				<div class="bar-stat"><span class="bar-percent bar-percent-{{$product->popularity['class']}}"></span></div>
				<div class="value">{{$product->popularity['value']}}<i>%</i></div>
			</div>

			<div>
				<div class="label">€/1GB</div>
				<div class="bar-stat"><span class="bar-percent bar-percent-{{$product->price_relative['class']}}"></span></div>
				<div class="value">{{$product->price_relative['value']}}<i>€</i></div>
			</div>

			<div>
				<div class="label">Valoración</div>
				<div class="bar-stat"><span class="bar-percent bar-percent-{{$product->ranking['class']}}"></span></div>
				<div class="value">{{$product->ranking['value']}}<i>/10</i></div>
			</div>

		</div>
		

	</div>

</article>

@endforeach