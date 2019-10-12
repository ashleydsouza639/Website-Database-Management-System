<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Webstats</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->

  <section class="colored-section" id="title">

<nav class="navbar navbar-expand-lg navbar-dark">

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


<!-- Title -->
  <div class="row">

    <div class="col-lg-6">
      <h1 class="big-heading">Website Analyer Tool and Search Engine</h1>
      <h2>Try our free Website Analysis Tool  to improve your site by finding all the issues related to Web Traffic & much more.</h2><br><br>
      
    <span style="font-size:1.2rem"> To register your website as a developer: </span>
    <a href="create.php">Click here</a> <br>

    <span style="font-size:1.2rem"> To search any website as a visitor: </span>
    <a href="search.php">Click here</a>
    </div>

    <div class="col-lg-6">
      <img  src="images/analyzing.png" alt="iphone-mockup" height="450" width="460">
    </div>



</div>

</section>


  <!-- Features -->

  <section class="white-section" id="features">

    <div class="container-fluid">
      <h1>Features</h1>
      <div class="row">
        <div class="feature-box col-lg-4">
          <i class="icon fas fa-check-circle fa-4x"></i>
          <h3 class="feature-title">Easy to use</h3>
          <p>Easily get info about visitors</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-bullseye fa-4x"></i>
          <h3 class="feature-title">Daily logs</h3>
          <p>Get timestamp of visitors</p>
        </div>

        <div class="feature-box col-lg-4">
          <i class="icon fas fa-search fa-4x"></i>
          <h3 class="feature-title">Search Engine</h3>
          <p>Search any website</p>
        </div>
      </div>


    </div>
  </section>



       <!-- Footer -->
     <?php include("includes/footer.php") ?>
</body>
</html>