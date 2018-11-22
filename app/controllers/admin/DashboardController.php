<?php

namespace App\Controllers\Admin;

use App\Classes\Session;
use App\Controllers\BaseController;
use App\Classes\Request;

class DashboardController extends BaseController {

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

public function get() {
  Request::refresh();
  $data = Request::old('post', 'name');
  var_dump("in get() inside admin/dashboardController" . $data);

  // if(Request::has('post')) {
  //   $request = Request::get('post');
  //   var_dump($request->name);
  // } else {
  //   var_dump('posting does not exists!');
  // }
}





}



?>