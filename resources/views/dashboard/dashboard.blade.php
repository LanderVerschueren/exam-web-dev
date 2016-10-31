@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>
				<div class="panel-body">
					@if ( !($contestants->count() > 0) )
						<p class="text-center">Nog geen contestants!</p>
					@else
					<table class="table table-striped">
						<thead>
							<tr>
								@foreach ( $columns as $column )
									<th>{{ $column }}</th>
								@endforeach
									<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach ( $contestants as $contestant )
								<tr>
									<td>{{ $contestant->id }}</td>
									<td>{{ $contestant->code }}</td>
									<td>{{ $contestant->name }}</td>
									<td>{{ $contestant->adres }}</td>
									<td>{{ $contestant->woonplaats }}</td>
									<td>{{ $contestant->ip }}</td>
									<td>{{ $contestant->created_at }}</td>
									<td>{{ $contestant->updated_at }}</td>
									<td><a href="/dashboard/delete/{{ $contestant->id }}" class="btn btn-default">Delete</span></a></td>
								</tr>
							@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
