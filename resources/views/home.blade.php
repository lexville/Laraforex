@extends('welcome')

@section('content')
    <h3 class="text-center">Convert currency</h3>
    {!! Form::open(array()) !!}

    <div class="form-group">
        {!! Form::label('currency', 'Amount:', ['class' => 'control-label']) !!}
        {!! Form::text('currency', null, ['class' => 'form-control', 'placeholder' => 'Enter amount to be converted']) !!}
    </div>
    {!! Form::submit('Search', ['class' => 'btn btn-raised btn-primary']) !!}
    {!! Form::close() !!}
@stop
