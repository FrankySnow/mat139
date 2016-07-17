{{--
	I N T E R V E N T I O N S
--}}
<table class="table table-striped table-bordered">
	<thead>
		<tr>
				<th><label for="interventions-id">id</th>
				<th><label for="interventions-date">Date</th>
				<th><label for="interventions-caserne">Caserne</th>
				<th><label for="interventions-role">Rôle</th>
				<th><label for="interventions-vehicule">Véhicule</th>
				<th><label for="interventions-typologie">Typologie</th>
				<th><label for="interventions-categorie">Catégorie</th>
				<th><label for="interventions-adresse">Adresse</th>
				<th><label for="interventions-commune">Commune</th>
				<th><label for="interventions-remarques">Remarques</th>
				<th><label for="interventions-code_3">Code&nbsp;3</th>
				<th><label for="interventions-ARI">ARI</th>
		</tr>
	</thead>
	<tbody>
	@foreach($interventions as $i => $inter)
		<tr>
			<td><a class="" href="{{ route( 'interventions.show', ['inter' => $inter->id, 'jour' => $jour->id] ) }}">{{ $inter->id }}</a></td>
			<td>{{ $inter->date }}</td>
			<td>{{ $inter->caserne }}</td>
			<td>{{ $inter->role }}</td>
			<td>{{ $inter->vehicule }}</td>
			<td>{{ $inter->typologie }}</td>
			<td>{{ $inter->categorie }}</td>
			<td>{{ $inter->adresse }}</td>
			<td>{{ $inter->commune }}</td>
			<td>{{ $inter->remarques }}</td>
			<td>{{ $inter->code_3 }}</td>
			<td>{{ $inter->ARI }}</td>
		</tr>
	@endforeach
	</tbody>
</table>