<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.png"/>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <style type="text/css">
    body {
      padding-top: 60px;
      padding-bottom: 40px;
    }
    .sidebar-nav {
      padding: 9px 0;
    }
  </style>
  <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min..js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>



  </head>

  <body>
   <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">

        <a class="brand" href="?">My Blog</a>


        <ul class="nav">
          <li class="active"><a href="?">Home</a></li>
          <?php if (IS_ADMIN): ?>
            <li><a href="?act=logout">Admin(Logout)</a></li>
          <?php else: ?>
            <li><a href="?act=login">Login</a></li>
          <?php endif ?>

        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>
<div class="container-fluid">
