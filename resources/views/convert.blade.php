@extends('welcome')

@section('content')
    <h3 class="text-center"> The {{$currencyCodeQuery}} exchange rate for ${{$query}} is: </h3>
    <h1 class="text-center">@currency($query, $currencyCodeQuery)</h1>
    <br>
    <h3 class="text-center"> Other Exchange Rates </h3>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Code</th>
        <th>Currency</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Euro</td>
        <td>EUR</td>
        <td>@currency($query, 'EUR')</td>
      </tr>
      <tr>
        <td>Pound Sterling</td>
        <td>GBP</td>
        <td>@currency($query, 'GBP')</td>
      </tr>
      <tr>
        <td>Hong Kong Dollar</td>
        <td>HKD</td>
        <td>@currency($query, 'HKD')</td>
      </tr>
      <tr>
        <td>Japanese Yen</td>
        <td>JPY</td>
        <td>@currency($query, 'JPY')</td>
      </tr>
      <tr>
        <td>South African rand</td>
        <td>ZAR</td>
        <td>@currency($query, 'ZAR')</td>
      </tr>
      <tr>
        <td>Canadian Dollar</td>
        <td>CAD</td>
        <td>@currency($query, 'CAD')</td>
      </tr>

@stop
