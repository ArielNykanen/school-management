<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Admin Panel - @yield('title')</title>
</head>
<body>

@include('includes.admin-sidebar')

<div class="off-canvas-content" data-off-canvas-content>
  <!-- Your page content lives here -->
  <div class="admin-title-bar">
    <div class="title-bar">
      <div class="title-bar-left">
        <button class="menu-icon hide-for-large" type="button" data-open="offCanvas"></button>
        <h5 class="title-bar-title">{{ getenv('APP_NAME') }}</h5> 
      </div>
    </div>
    </div>
  @yield('content')

</div>


<script src="./js/all.js"></script>
<script src="https://use.fontawesome.com/88c6faeeb0.js"></script> 
</body>
</html>
