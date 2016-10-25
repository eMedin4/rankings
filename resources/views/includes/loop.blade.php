				
@foreach ($products as $product)

<article>

	<div class="specs">

		<div class="specs-image">
			<a rel="nofollow" href="{{$product->url}}">
				<picture>
			        <source media="(min-width: 660px)" srcset="{{asset('/assets/images') . $product->image . '.jpg'}}">
			        <source media="(max-width: 660px)" srcset="{{asset('/assets/images') . $product->image . '-small.jpg'}}">
			        <img src="{{asset('/assets/images') . $product->image . '.jpg'}}" alt="{{$product->title}}" title="Disco SSD {{$product->title}}">
			    </picture>
			</a>
		</div>

		<div class="specs-data">
			<h2><a rel="nofollow" href="{{$product->url}}">{{$product->title}} {{$product->size_format}}</a></h2>
			<div class="specs-extra">
				<div><p>Modelo</p><h3>{{$product->model}}</h3></div>
				<div><p>Capacidad</p><h3>{{$product->size_format}}</h3></div>
				<div><p>Formato</p><h3>{{$product->format}}</h3></div>
			</div>
			<div class="image-mobile">
				<a rel="nofollow" href="{{$product->url}}">

				</a>
			</div>
			<div class="price">
				<a rel="nofollow" class="amazon-link" href="{{$product->url}}">Amazon <span>{{$product->price['integer']}},{{$product->price['decimal']}}</span> €</a>
				<a rel="nofollow" class="amazon-btn" href="{{$product->url}}">Ver ficha</a>
			</div>
		</div>

	</div>

	<div class="stats">

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
				<div class="value value-ranking">{{$product->ranking['value']}}<i>/10</i></div>
			</div>

		</div>
		

	</div>

</article>

@endforeach
