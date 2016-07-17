@extends('master')

@section('titre')
Nouveau jour
@stop

@section('contenu')
	<div class="row">
	@include('errors._messages')
	</div>
	{!! Form::model( $jour, ['route' => ['jours.store']] ) !!}
	
		@include( 'jours._form' )
		<div class="row">
			<div class="small-12 columns">		
				{!! Form::submit( "Créer" , array('class' =>"button expand radius")) !!}
			</div>
		</div>
	{!! Form::close() !!}

@stop