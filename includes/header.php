<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Webstats</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/styles.css">
  

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>






  <!-- Nav Bar -->

  <nav class="navbar navbar-expand-lg navbar-dark" >

    <a class="navbar-brand" href="">webstats</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#footer">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pricing">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cta">Contact</a>
        </li>
        <li class="nav-item">
        <?php
          include("includes/config.php");


          if(isset($_SESSION['userLoggedIn'])) {
            $userLoggedIn = $_SESSION['userLoggedIn'];
        ?>
            <form action="tt.php" method="POST">
            <button type="submit" class="btn btn-primary" style="margin-top:5px">Logout</button>
            </form>
          

          <?php
          echo " Welcome " . $userLoggedIn;    
          }
          else {  ?>
            <form action="register.php" method="POST">
            <button type="submit" class="btn btn-primary" style="margin-top:5px">Login</button>
            </form>
          <?php }
          ?>  
        </li>
      </ul>
    </div>
  </nav>

