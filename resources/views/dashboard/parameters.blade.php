@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		
			<div class="panel panel-default">
				<div class="panel-heading">
				<h2 class="text-center">Adjust parameters of contests.</h2>
				</div>
				<div class="panel-body">
					@if (count($errors) > 0)
          			<div class="alert alert-danger">
            			<ul>
              			@foreach ($errors->all() as $error)
              				<li>{{ $error }}</li>
              			@endforeach
            			</ul>
          			</div>
          			@endif
          			
					@if(Session::has('success'))
					    <div class="alert alert-success"> 
					    	<ul>
					    		<li>{!! session('success') !!}</li>
					    	</ul>
					    </div>
					@endif
          			
					@foreach( $contests as $contest )
						<h3>Contest ID: {{ $contest->id }} with prize: {{ $contest->prize }}</h3>
						{!! Form::model($contest, ['url' => ['/dashboard/parameters', $contest->id]]) !!}
						<div class="form-group">
							{!! Form::label('start_date', 'Start Datum:', ['class' => 'control-label']) !!}
							{!! Form::date('start_date', null, array('required', 'class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::label('end_date', 'Eind Datum:', ['class' => 'control-label']) !!}
							{!! Form::date('end_date', null, array('required', 'class' => 'form-control')) !!}
						</div>
						<div class="form-group">
							{!! Form::submit('Sla parameters op') !!}
						</div>
						{!! Form::close() !!}
					@endforeach
					
					<h3>Email van admin</h3>
					{!! Form::model($users, ['url' => ['/dashboard/email_update']]) !!}
					<div class="form-group">
						{!! Form::label('email', 'E-mailadres:', ['class' => 'control-label']) !!}
						{!! Form::email('email', null, array('required', 'class' => 'form-control')) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Sla e-mailadres op') !!}
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection