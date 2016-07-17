<ul class="small-block-grid-4">
	@foreach($jours as $i => $jour)
	<li>
		<div class="panel">
			<div class="row">
				<div class='small-6 column'><a class="" href="{{ route( 'jours.show', ['id' => $jour->id] ) }}">{{ $jour->id }}</a></div>
				<div class='small-6 column'>{{ $jour->date }}</div>
			</div>
			<div class="row">
				<div class='small-6 column'>{{ $jour->caserne }}</div>
				<div class='small-6 column'><span class="label">équipe {{ $jour->equipe }}</span></div>
			</div>
			<div class="row">
				<div class='small-6 column'>{{ $jour->role_1 }}</div>
				<div class='small-6 column'>{{ $jour->role_2 }}</div>
			</div>
			<div class="row">
				<div class='small-6 column'>{{ $jour->nb_inter }}</div>
				<div class='small-6 column'>{{ $jour->heures_sup }}</div>
			</div>
			<div class="row">
				<div class='small-12 column'>{{ $jour->remarques }}</div>
			</div>
		</div>
	</li>
	@endforeach
</ul>