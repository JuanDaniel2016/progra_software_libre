<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DemoController extends Controller
{
    function greet() {
      return '<h1>Hello world!</h1>';
    }
}
