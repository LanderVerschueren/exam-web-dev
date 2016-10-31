@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2 class="text-center">{{ $contest->prize }}</h2>
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
          {!! Form::open(array('url' => array('/contestant', $contest->id))) !!}
          <div class="form-group">
            {!! Form::label('name', 'Naam:', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Naam')) !!}
          </div>
          <div class="form-group">
            {!! Form::label('adres', 'Adres:', ['class' => 'control-label']) !!}
            {!! Form::text('adres', null, array('required', 'class' => 'form-control', 'placeholder' => 'Straat + nummer')) !!}
          </div>
          <div class="form-group">
            {!! Form::label('woonplaats', 'Woonplaats:', ['class' => 'control-label']) !!}
            {!! Form::text('woonplaats', null, array('required', 'class' => 'form-control', 'placeholder' => 'Woonplaats')) !!}
          </div>
          <div class="form-group">
            {!! Form::label('code', 'Code:', ['class' => 'control-label']) !!}
            {!! Form::text('code', null, array('required', 'class' => 'form-control', 'placeholder' => 'Persoonlijke code')) !!}
          </div>
          <div class="form-group">
            {!! Form::submit('Sla offer op') !!}
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
