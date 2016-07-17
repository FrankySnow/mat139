@extends('master')

@section('titre')
Nouvelle intervention
@stop

@section('contenu')
	<div class="row">
	@include('errors._messages')

	<a href="{{ route('jours.show', ['id' => $jour->id]) }}">Retour au jour n°{{ $jour->id }} ({{ $jour->date }})</a>
	</div>
	{!! Form::model( $intervention, [ 'route' => [ 'interventions.store' , $jour->id ] ] ) !!}
	
		@include( 'interventions._form' )
		
		<div class="row">
			<div class="columns small-12">
				{!! Form::submit( "Créer" , array('class' =>"button primary expand")) !!}
			</div>
		</div>
			
	{!! Form::close() !!}

@stop