@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<h2 class="text-center">
							Win allerhande prijzen met Coca Cola!
						</h2>
						<p class="text-center">
							Op elk Coca-Cola flesje staat een code! Geef deze in bij de periode die loopt en maak kans!
						</p>
					</div>
					<div class="row">
						@foreach( $contests as $contest )
							<a href="/contest/{{ $contest->id }}">
								<div class="col-sm-3" class="($current_date < $contest->end_date)? '': hidden ">
									<p class="text-center">
										Winnaar:
										@if ( $contest->winner != '' )
											<h2 class="text-center">{{ ucfirst($contest->winner) }}</h2>
										@else
											<h2 class="text-center">TBA</h2>
										@endif
									</p>
									<img class="img-responsive" src="/img/{{ $contest->image }}" alt="Foto van {{ $contest->prize }}" />
									<p class="text-center">{{ $contest->start_date . " tot " . $contest->end_date }}</p>
								</div>
							</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
