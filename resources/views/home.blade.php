@extends('welcome')

@section('content')
    <h3 class="text-center">Convert currency</h3>
    {!! Form::open(array('route' => 'results', 'method' => 'GET')) !!}

    <div class="form-group">
        {!! Form::label('currency', 'Amount:', ['class' => 'control-label']) !!}
        {!! Form::text('currency', null, ['class' => 'form-control', 'placeholder' => 'Enter amount to be converted']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('currency-code', 'Currency Code:', ['class' => 'control-label']) !!}
        {!! Form::select('currency-code', array('EUR', 'GBP', 'HKD', 'JPY', 'ZAR', 'CAD'), NULL, array('class' => 'form-control')); !!}
    </div>
    {!! Form::submit('Search', ['class' => 'btn btn-raised btn-primary']) !!}
    {!! Form::close() !!}
@stop
