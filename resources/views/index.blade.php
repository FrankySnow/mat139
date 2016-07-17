@extends('master')

@section('titre')
{{ $jours->total() }} jours
@stop

@section('contenu')
	@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	@if ( $errors->any() )
	<div class="alert alert-error">{!! Html::ul($errors->all()) !!}</div>
	@endif

	@include('jours._table')
	
	{!! $jours->render() !!}
	
<!--	{!! Form::open( ['route' => ['index']] ) !!}
	{!! Form::select('pages', array('10' => '10', '20' => '20', '50' => '50', '100' => '100'), 10, array('class' => '')) !!}
	{!! Form::submit( 'hop' , array('class' =>'btn btn-primary')) !!}
	{!! Form::close() !!}-->

@stop