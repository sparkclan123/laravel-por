<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


/**
 *
 */
class MovieController extends Controller
{

  function __construct()
  {
    # code...
  }

  public function index()
  {
      return "Hello Frow Movie Controller";
  }

  public function view()
  {
      return "Hello Frow Movie Controller View Method";
  }

}
