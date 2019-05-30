
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $title; ?></title>

  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">The Bookstore</a>
      </div>

      <!--/.navbar-collapse -->
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <!-- link to publiser_list.php -->
          <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
          <!-- link to books.php -->
          <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
          <!-- link to shopping cart -->
          <li><a href="signup.php"><span class="glyphicon glyphicon-new-window"></span>&nbsp; SignUp</a></li>

          <?php
            if(isset($_SESSION['login']))
                {?>
                  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
          <?php }?>
          <?php
            if(isset($_SESSION['login']) == false)
                {?>
                  <li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
          <?php }
          if(isset($_SESSION['login']))  { ?>
                  <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Welcome to The BookStore</h1>
        <p class="lead">Choose your next book from our wide range of collections!</p>
      </div>
    </div>
  <?php } ?>

  <div class="container" id="main">
