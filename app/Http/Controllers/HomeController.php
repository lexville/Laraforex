<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getSearchResults(Request $request)
    {
        $query = $request->input('currency');

        $currencyCodeQuery = $request->input('currency-code');

        return view('convert', [
            'query' => $query,
            'currencyCodeQuery' => $currencyCodeQuery
        ]);
    }
}
