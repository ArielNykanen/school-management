<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Course extends Model {
  use SoftDeletes;

  public $timesstamp = true;
  protected $fillable = ['course_name', 'course_description', 'course_image'];
  protected $dates = ['deleted_at'];
}

?>