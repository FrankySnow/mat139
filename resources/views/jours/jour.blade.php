@extends('master')

@section('titre')
{{ $jour->id }}<sup>e</sup> jour
@stop

@section('contenu')
	<div class="row">
	@include('errors._messages')
	</div>
	{!! Form::model( $jour, [ 'route' => [ 'jours.update' , $jour->id ] ] ) !!}
	
		@include( 'jours._form' )	

		<div class="row">
			<div class="column small-6">
				{!! Form::submit( "Enregistrer" , array('class' =>"button warning radius expand")) !!}
			</div>
			<div class="column small-6">
				<a class="button success radius expand"
				href="{{ route('interventions.create', ['jour'=>$jour->id]) }}">Nouvelle intervention</a>
			</div>
		</div>
	{!! Form::close() !!}

	<div class="row">
	@if( count($interventions) )
		@include( 'interventions._table' )
	@else
		<h1>Pas d'intervention</h1>
	@endif
	</div>
@stop