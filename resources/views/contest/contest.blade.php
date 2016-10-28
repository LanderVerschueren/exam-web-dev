@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="text-center"> {{ $contest->prize }} </h2>
				</div>
				<div class="panel-body">
					<div class="col-sm-4">
						<img class="img-responsive" src="/img/{{ $contest->image }}" alt="Foto van {{ $contest->prize }}">
					</div>
					<div class="col-sm-8">
						<p>Begindatum: {{ $contest->start_date }}</p>
						<p>Einddatum: {{ $contest->end_date }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection