<?php

namespace App\Http\Controllers;

use App\CoffeeRoaster;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buy');
    }

}