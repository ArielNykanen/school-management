<?php
namespace App\Controllers\Admin;
use App\Classes\Session;
use App\Models\Course;

class CoursesController {
  public function show() {
    // Session::add('admin', 'Hello Ariel Nykänen You Are The Best!!!');
    // Session::remove('admin');
    // if (Session::has('admin')) {
        
    //   $msg = Session::get('admin');
  
    // } else {
  
    //   $msg = 'Not Defined!';
  
    // }

      $courses = Course::all();

    return view('admin/courses/courses', compact('courses'));
  }
  
  public function create() {
    
  }
  
  
}

?>