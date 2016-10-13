<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MoviesController extends Controller
{
    public function index($genre)
    {
      return 'Returning movies from '.$genre;
    }
}
