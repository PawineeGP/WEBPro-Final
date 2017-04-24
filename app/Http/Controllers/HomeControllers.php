<?php
namespace App\Http;

use App\Http\Controllers\Controller;

/**
 *
 */
class HomeController extends Controllers
{

  function __construct(argument)
  {
    # code...
  }
  
  function home()
  {
    return view("Home");
  }
}



?>
