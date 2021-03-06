<?php

if(! function_exits('view')) {
  function view($view) {
    return new App\Http\Response($view);
  }
}

if(! function_exits('viewPath')) {
  function viewPath($view) {
    return __DIR__ . "/../views/$view.php";
  }
}