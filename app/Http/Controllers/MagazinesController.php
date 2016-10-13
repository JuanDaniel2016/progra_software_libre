<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MagazinesController extends Controller
{
  public function index($genre = null) {
    if ($genre == null) {
      return 'Returning magazines index';
    }
    return 'Returning magazines from '.$genre;
  }
}
