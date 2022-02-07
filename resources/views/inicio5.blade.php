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


@endsection
@section('botones')
<center>
<footer>
<a href="{{route('inicio4')}}" class="button">🠔 Anterior pagina</a>
<p></p>
<br>
</footer>
</center>
</section>
@endsection
@section('banner')
<div class="wrapper style2">
<article id="main" class="container special">
<a href="" class="image featured"><img src="images/rick.jpg" alt="" /></a>
<header>
	<h2><a href="{{route('inicio')}}">Rick and Morty</a></h2>
	<p>
	RECOMENDACION: Capitulo 12 "Morty Malvado"
	</p>
</header>
</article></div>
@endsection