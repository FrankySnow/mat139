@extends('master')

@section('titre')
{{ $intervention->id }}<sup>e</sup> intervention
@stop

@section('contenu')
	<div class="row">
	@include('errors._messages')
	
	<a href="{{ route('jours.show', ['id' => $jour->id]) }}">Retour au jour n°{{ $jour->id }} ({{ $jour->date }})</a>
</div>
	{!! Form::model( $intervention, [ 'route' => [ 'interventions.update' , $jour->id, $intervention->id ] ] ) !!}
	
		@include( 'interventions._form' )
		
		<div class="row">
			<div class="columns small-9">
				{!! Form::submit( "Enregistrer" , array('class' =>"button warning expand")) !!}
			</div>
			<div class="columns small-3">
			<a class="button success expand"
				href="{{ route('interventions.create', ['jour'=>$jour->id]) }}">Nouvelle intervention</a>
			</div>
		</div>
	{!! Form::close() !!}
@stop