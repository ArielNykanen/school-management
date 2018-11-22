<?php

namespace App\Controllers\Admin;

use App\Classes\Session;
use App\Controllers\BaseController;

class DashboardCOntroller extends BaseController {

public function show() {
  Session::add('admin', 'Welcome Admin!');
  Session::remove('admin');
  if (Session::has('admin')) {
      
    $msg = Session::get('admin');

  } else {

    $msg = 'Not Defined!';

  }
  return view('admin/dashboard', ['admin' => $msg]);
}



}



?>