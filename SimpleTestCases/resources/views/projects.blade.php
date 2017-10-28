@extends('template.base')

@section('titulo', 'Proyectos')
@section('subtitulo', 'Total ' . count($projects) . ' proyectos.')

@section('content')

<div class="row">	
	<div class="col-lg-9">
		
			@forelse ($projects as $p)

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">{{$p->name}}</h3>
						<div class="box-tools pull-right">					
							<button type="button" class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
						</div>			
					</div>	

					<div class="box-body">					
						<p class="text-justify">{{$p->description}}</p>
						
							{{--*/$created = date_format($p->created_at, 'l jS F Y  g:ia');/*--}}
							@if (!empty($p->created_at))
								<div>
									creado el {{$p->created_at}}
								</div>
							@endif	
							@if (!empty($p->updated_at))
								<div>
									modificado el {{$p->updated_at}}
								</div>
								
							@endif

					</div>

					<div class="box-footer">
						<ul class="list-inline">
	 						<li class="list-inline-item">
								<a href="">Hitos</a>
	 						</li>
	 						<li class="list-inline-item">
								<a href="">Planes de prueba</a>
	 						</li>
	 						<li class="list-inline-item">
								<a href="">Casos de Pruebas</a>
	 						</li>
						</ul>
					</div>
				</div>

			@empty 
			    
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Sin Proyectos</h3>
						<div class="box-tools pull-right">					
							<button type="button" class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
						</div>			
					</div>		
					<div class="box-body">
						<h4>Aún no tiene proyectos creados. puedes comezar agregando tu proyecto .</h4>
						<a href="/" class="btn btn-success btn-flat"><i class="fa fa-fw fa-plus"></i> Agregar  Proyecto</a> 
					</div>
				</div>

			@endforelse	


	</div>

	<div class="col-lg-3">
		<a href="" class="btn btn-success btn-flat btn-block"><i class="fa fa-fw fa-plus"></i> Agregar Proyecto</a>

		<div class="box">
			<div class="box-body text-center">	
				<div style="font-size:60px;">{{count($projects)}}</div>
				<div>Proyectos</div>
			</div>
		</div>

	</div>

</div>
@endsection