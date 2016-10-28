@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="text-center">Wedstrijd Coca-Cola</h1>
				</div>
				<div class="panel-body">
					@foreach( $contests as $contest )
						<a href="/contest/{{ $contest->id }}">
							<div class="col-sm-3" class="($current_date < $contest->end_date)? '': hidden ">
								@if ( $contest->winner != '' )
									<h2 class="text-center">{{ ucfirst($contest->winner) }}</h2>
								@else
									<h2 class="text-center">TBA</h2>
								@endif

								<p class="text-center">{{ $contest->start_date . " tot " . $contest->end_date }}</p>
							</div>
						</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection