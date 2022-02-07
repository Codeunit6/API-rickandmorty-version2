@extends('template.layaout')
@section('catalogos')
<section class="carousel">
	<div class="reel">
		@foreach ($personajes as $personaje)
		<article class="zoom">
			<a href="{{route('detalle',$personaje['id'])}}" class="image featured"><img src="{{$personaje['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje['id'])}}">{{$personaje['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje['genero']}}</p>
			<p>Origen: {{$personaje['origen']}}</p>
			@if($personaje['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje['estatus']}} - {{$personaje['especie']}}</span></li>
			@endif
			@if($personaje['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje['estatus']}} - {{$personaje['especie']}}</span></li>
			@endif
			@if($personaje['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje['estatus']}} - {{$personaje['especie']}}</span></li>
			@endif
			
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes2 as $personaje2)
		<article class="zoom">
			<a href="{{route('detalle',$personaje2['id'])}}" class="image featured"><img src="{{$personaje2['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje2['id'])}}">{{$personaje2['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje2['genero']}}</p>
			<p>Origen: {{$personaje2['origen']}}</p>
			@if($personaje2['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje2['estatus']}} - {{$personaje2['especie']}}</span></li>
			@endif
			@if($personaje2['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje2['estatus']}} - {{$personaje2['especie']}}</span></li>
			@endif
			@if($personaje2['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje2['estatus']}} - {{$personaje2['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes3 as $personaje3)
		<article class="zoom">
			<a href="{{route('detalle',$personaje3['id'])}}" class="image featured"><img src="{{$personaje3['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje3['id'])}}">{{$personaje3['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje3['genero']}}</p>
			<p>Origen: {{$personaje3['origen']}}</p>
			@if($personaje3['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje3['estatus']}} - {{$personaje3['especie']}}</span></li>
			@endif
			@if($personaje3['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje3['estatus']}} - {{$personaje3['especie']}}</span></li>
			@endif
			@if($personaje3['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje3['estatus']}} - {{$personaje3['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes4 as $personaje4)
		<article class="zoom">
			<a href="{{route('detalle',$personaje4['id'])}}" class="image featured"><img src="{{$personaje4['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje4['id'])}}">{{$personaje4['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje4['genero']}}</p>
			<p>Origen: {{$personaje4['origen']}}</p>
			@if($personaje4['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje4['estatus']}} - {{$personaje4['especie']}}</span></li>
			@endif
			@if($personaje4['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje4['estatus']}} - {{$personaje4['especie']}}</span></li>
			@endif
			@if($personaje4['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje4['estatus']}} - {{$personaje4['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes5 as $personaje5)
		<article class="zoom">
			<a href="{{route('detalle',$personaje5['id'])}}" class="image featured"><img src="{{$personaje5['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje5['id'])}}">{{$personaje5['nombre']}}</a></h3>
			</header>
			<p>{{$personaje5['genero']}}</p>
			<p>Origen: {{$personaje5['origen']}}</p>
			@if($personaje5['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje5['estatus']}} - {{$personaje5['especie']}}</span></li>
			@endif
			@if($personaje5['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje5['estatus']}} - {{$personaje5['especie']}}</span></li>
			@endif
			@if($personaje5['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje5['estatus']}} - {{$personaje5['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes6 as $personaje6)
		<article class="zoom">
			<a href="{{route('detalle',$personaje6['id'])}}" class="image featured"><img src="{{$personaje6['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje6['id'])}}">{{$personaje6['nombre']}}</a></h3>
			</header>
			<p>{{$personaje6['genero']}}</p>
			<p>Origen: {{$personaje6['origen']}}</p>
			@if($personaje6['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje6['estatus']}} - {{$personaje6['especie']}}</span></li>
			@endif
			@if($personaje6['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje6['estatus']}} - {{$personaje6['especie']}}</span></li>
			@endif
			@if($personaje6['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje6['estatus']}} - {{$personaje6['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes7 as $personaje7)
		<article class="zoom">
			<a href="{{route('detalle',$personaje7['id'])}}" class="image featured"><img src="{{$personaje7['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje7['id'])}}">{{$personaje7['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje7['genero']}}</p>
			<p>Origen: {{$personaje7['origen']}}</p>
			@if($personaje7['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje7['estatus']}} - {{$personaje7['especie']}}</span></li>
			@endif
			@if($personaje7['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje7['estatus']}} - {{$personaje7['especie']}}</span></li>
			@endif
			@if($personaje7['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje7['estatus']}} - {{$personaje7['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes8 as $personaje8)
		<article class="zoom">
			<a href="{{route('detalle',$personaje8['id'])}}" class="image featured"><img src="{{$personaje8['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje8['id'])}}">{{$personaje8['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje8['genero']}}</p>
			<p>Origen: {{$personaje8['origen']}}</p>
			@if($personaje8['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje8['estatus']}} - {{$personaje8['especie']}}</span></li>
			@endif
			@if($personaje8['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje8['estatus']}} - {{$personaje8['especie']}}</span></li>
			@endif
			@if($personaje8['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje8['estatus']}} - {{$personaje8['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes9 as $personaje9)
		<article class="zoom">
			<a href="{{route('detalle',$personaje9['id'])}}" class="image featured"><img src="{{$personaje9['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje9['id'])}}">{{$personaje9['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje9['genero']}}</p>
			<p>Origen: {{$personaje9['origen']}}</p>
			@if($personaje9['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje9['estatus']}} - {{$personaje9['especie']}}</span></li>
			@endif
			@if($personaje9['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje9['estatus']}} - {{$personaje9['especie']}}</span></li>
			@endif
			@if($personaje9['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje9['estatus']}} - {{$personaje9['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
</section>
<section class="carousel">
	<div class="reel">
		@foreach ($personajes10 as $personaje10)
		<article class="zoom">
			<a href="{{route('detalle',$personaje10['id'])}}" class="image featured"><img src="{{$personaje10['imagen']}}" alt="" /></a>
			<header>
				<h3><a href="{{route('detalle',$personaje10['id'])}}">{{$personaje10['nombre']}}</a></h3>
			</header>
			<p>Genero: {{$personaje10['genero']}}</p>
			<p>Origen: {{$personaje10['origen']}}</p>
			@if($personaje10['estatus']=='Alive')
				<li class="status__icon1"><span>{{$personaje10['estatus']}} - {{$personaje10['especie']}}</span></li>
			@endif
			@if($personaje10['estatus']=='Dead')
				<li class="status__icon2"><span>{{$personaje10['estatus']}} - {{$personaje10['especie']}}</span></li>
			@endif
			@if($personaje10['estatus']=='unknown')
				<li class="status__icon3"><span>{{$personaje10['estatus']}} - {{$personaje10['especie']}}</span></li>
			@endif
		</article>	
		@endforeach		
	</div>
@endsection
@section('botones')
<center>
<footer>
<a href="{{route('inicio')}}" class="button">🠔 Anterior pagina</a>
&nbsp
&nbsp
<a href="{{route('inicio3')}}" class="button">Siguiente pagina ➜</a>
</footer>
</center>
</section>
@endsection
@section('banner')
<div class="wrapper style2">
<article id="main" class="container special">
<a href="" class="image featured"><img src="images/toxico.jpg" alt="" /></a>
<header>
	<h2><a href="{{route('inicio')}}">Rick and Morty</a></h2>
	<p>
	RECOMENDACION: Capitulo 28 "Versiones Toxicas"
	</p>
</header>
</article></div>
@endsection