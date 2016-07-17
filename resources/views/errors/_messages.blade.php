@if ( Session::has('message') )
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if ( $errors->any() )
	<div class="alert alert-error">{!! Html::ul($errors->all()) !!}</div>
@endif