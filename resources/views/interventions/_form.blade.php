{{--
INTERVENTIONS
--}}
<?php $attrs = array('class' => 'form-control') ?>
<div class="row">
	<div class="columns small-3">
		{!! Form::label('date', 'Date') !!}
		{!! Form::date('date', $jour->date, $attrs + ['disabled']) !!}
	</div>
	
	<div class="columns small-2">
		{!! Form::label('caserne', 'Caserne') !!}
		{!! Form::select('caserne', array('1' => '1', '2' => '2', '3' => '3'), NULL, $attrs) !!}
	</div>
		
	<div class="columns small-3">
		{!! Form::label('role', 'Rôle') !!}
		{!! Form::text('role', NULL, $attrs) !!}
	</div>
					
	<div class="columns small-4">
		{!! Form::label('vehicule', 'Véhicule') !!}
		{!! Form::text('vehicule', NULL, $attrs) !!}
	</div>
						
	<div class="columns small-4">
		{!! Form::label('typologie', 'Typologie') !!}
		{!! Form::text('typologie', NULL, $attrs) !!}
	</div>
		
	<div class="columns small-4">	
		{!! Form::label('categorie', 'Catégorie') !!}
		{!! Form::text('categorie', NULL, $attrs) !!}
	</div>
		
	<div class="columns small-4">
		{!! Form::label('adresse', 'Adresse') !!}
		{!! Form::text('adresse', NULL, $attrs) !!}
	</div>
		
	<div class="columns small-4">
		{!! Form::label('commune', 'Commune') !!}
		{!! Form::text('commune', NULL, $attrs) !!}
	</div>
	
	<div class="columns small-4">
		{!! Form::label('code_3', 'Code 3') !!}
		<input type="hidden" name="code_3" value="0">
		{!! Form::checkbox('code_3', 1) !!}
		{{-- Form::text('code_3', NULL, $attrs) --}}
	</div>
	
	<div class="columns small-4">
		{!! Form::label('ARI', 'ARI') !!}
		<input type="hidden" name="ARI" value="0">
		{!! Form::checkbox('ARI', 1) !!}
		{{-- Form::text('ARI', NULL, $attrs) --}}
	</div>
		
	<div class="columns small-12">
		{!! Form::label('remarques', 'Remarques') !!}
		{!! Form::textarea('remarques', NULL, $attrs + ['rows' => '3']) !!}
	</div>

@unless( Route::currentRouteName() == 'interventions.create' )		
	<div class="columns small-6">
		{!! Form::label('created_at', 'Création') !!}
		{!! Form::text('created_at', NULL, $attrs + ['disabled']) !!}
	</div>
		
	<div class="columns small-6">
		{!! Form::label('updated_at', 'Mise à jour') !!}
		{!! Form::text('updated_at', NULL, $attrs + ['disabled']) !!}
	</div>
@endunless
</div>