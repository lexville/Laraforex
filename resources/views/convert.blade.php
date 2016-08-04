@extends('welcome')

@section('content')
    <h3 class="text-center"> The {{$currencyCodeQuery}} exchange rate for ${{$query}} is: </h3>
    <h1 class="text-center">@currency($query, $currencyCodeQuery)</h1>
    <br>
    <h3 class="text-center"> Other Exchange Rates </h3>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Code</th>
        <th>Currency</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>EUR</td>
        <td>@currency($query, 'EUR')</td>
      </tr>
      <tr>
        <td>GBP</td>
        <td>@currency($query, 'GBP')</td>
      </tr>
      <tr>
        <td>HKD</td>
        <td>@currency($query, 'HKD')</td>
      </tr>
      <tr>
        <td>JPY</td>
        <td>@currency($query, 'JPY')</td>
      </tr>
      <tr>
        <td>ZAR</td>
        <td>@currency($query, 'ZAR')</td>
      </tr>
      <tr>
        <td>CAD</td>
        <td>@currency($query, 'CAD')</td>
      </tr>

@stop
