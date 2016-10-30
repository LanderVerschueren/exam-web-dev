@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>
				<div class="panel-body">
					@foreach ( $users as $user )
					<ul>
						<li> {{ $user->first_name }} </li>
					</ul>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
