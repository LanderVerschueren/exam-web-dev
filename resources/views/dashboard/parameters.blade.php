@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				@foreach( $contests as $contest )
				<div class="panel-heading">
				<h2 class="text-center">Adjust parameters of contests nr. {{ $contest->id }}</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(array('url' => array('/dashboard/parameters', $contest->id))) !!}
					<div class="form-group">
						{!! Form::label('start_date', 'Start Datum:', ['class' => 'control-label']) !!}
						{!! Form::text('start_date', null, array('required', 'class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::label('end_date', 'Eind Datum:', ['class' => 'control-label']) !!}
						{!! Form::text('end_date', null, array('required', 'class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Sla parameters op') !!}
					</div>
					
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection