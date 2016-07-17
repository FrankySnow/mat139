<?php $attrs = array('class' => 'form-control') ?>
<div class="row">
	<div class="small-2 columns">
		{!! Form::label('date', 'Date') !!}
		{!! Form::date('date', NULL, $attrs + ['placeholder' => 'la date']) !!}
	</div>
	
	<div class="small-2 columns">
		{!! Form::label('caserne', 'Caserne') !!}
		{!! Form::select('caserne', array('1' => '1', '2' => '2', '3' => '3'), NULL, $attrs) !!}
	</div>
	
	<div class="small-2 columns">
		{!! Form::label('equipe', 'Équipe') !!}
		{!! Form::select('equipe', array('A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D'), NULL, $attrs) !!}
	</div>
						
	<div class="small-2 columns">
		{!! Form::label('role_1', 'Rôle 1') !!}
		{!! Form::text('role_1', NULL, $attrs) !!}
	</div>
						
	<div class="small-2 columns">
		{!! Form::label('role_2', 'Rôle 2') !!}
		{!! Form::text('role_2', NULL, $attrs) !!}
	</div>
	<div class="small-2 columns">
		{!! Form::label('heures_sup', 'Heures sup\'') !!}
		{!! Form::text('heures_sup', NULL, $attrs ) !!}
	</div>
						
</div>
<div class="row">						
@unless( Route::currentRouteName() == 'jours.create' )	
	<div class="small-2 columns">
		{!! Form::label('nb_inter', 'Nombre d\'inters') !!}
		{!! Form::text('nb_inter', NULL, $attrs + ['disabled']) !!}
	</div>
@endunless
						
	<div class="small-4 columns">
		{!! Form::label('remarques', 'Remarques') !!}
		{!! Form::textarea('remarques', NULL, $attrs + ['rows' => 1]) !!}
	</div>

@unless( Route::currentRouteName() == 'jours.create' )		
	<div class="small-3 columns">
		{!! Form::label('created_at', 'Création') !!}
		{!! Form::text('created_at', NULL, $attrs + ['disabled']) !!}
	</div>
		
	<div class="small-3 columns">
		{!! Form::label('updated_at', 'Mise à jour') !!}
		{!! Form::text('updated_at', NULL, $attrs + ['disabled']) !!}
	</div>
@endunless
</div>