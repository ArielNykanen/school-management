@extends('admin.layout.base')
@section('title', 'dashboard')


@section('content')

<div class='dashboard'>
  <div class='row expanded'>
  <h2>Dashboard</h2>
    <form action="/school-management/public/admin" method='POST' enctype='multipart/form-data'>
      <input type="text" name='name' class='form-control'>
      <input type="file" name='image'>
      <input class='btn btn-primary' type="submit" name='go' value='Submit'>
    </form>
    

  </div>
</div>

@endsection