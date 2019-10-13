<?php   include('config.php');
    if (isset($_POST['save'])) {
        unset($_SESSION['no']);
  
        $_SESSION['no']=$_POST['noofdevelopers'];
        echo $_SESSION['no'];        // You can set the value however you like.
      }
      print_r($_SESSION);
      if(isset($_POST['website_url'])){
         $_SESSION['website_url'] = $_POST['website_url'];
  }
      
      if(isset($_SESSION['website_url'])){
            echo "h". $_SESSION['website_url'];
      }
      ?>


<?php

if (isset($_POST['save'])) {
  unset($_SESSION['no']);

  $_SESSION['no']=$_POST['noofdevelopers'];
  echo $_SESSION['no'];        // You can set the value however you like.

  $website_url=$_POST['website_url'];
  $website_type=$_POST['website_type'];
  $website_name=$_POST['website_name'];


  $q="INSERT INTO Website VALUES('$website_url','$website_type','$website_name')"; 
    $result=$con->query($q);
    if($result==true){
        echo "insert success";
    }else{
        echo mysqli_error($con);
    }
}
print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP CRUD</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
<?php 


if (isset($_POST['save'])) {
    for ($i=1;$i<= $_SESSION['no'];$i++) {
        ?>
<form action='finaltable.php' method='POST'>

       <div class='form-group'>
        <label for='fname'>Developers First Name<?php echo $i ?></label>
        <input id='fname' type='text' name='fname[]' class='form-control' placeholder='Enter first name' >
        </div>

        <div class='form-group'>
        <label for='lname'>Developers Last Name <?php echo $i ?></label>
        <input id='lname' type='text' name='lname[]' class='form-control' placeholder='Enter last name' >
        </div>
      <!-- not working insert  gender in db
        <div class='form-group'>
        <label for='gender'>Developers Gender <?php echo $i ?></label>
        <input type='radio' name='gender<?php echo $i?>[]' value='female'>Female
        <input type='radio' name='gender<?php echo $i?>[]' value='male'>Male
        <input type='radio' name='gender<?php echo $i?>[]' value='other'>Other<br>
         -->
         
        <div class='form-group'>
        <label for='gender'>Developers Gender <?php echo $i ?></label>
        <input id='lname' type='text' name='gender[]' class='form-control' placeholder='Enter gender' >
        </div>

        <div class='form-group'>
        <label for='designation'>Developers Designation <?php echo $i ?></label>
        <input id='designation' type='text' name='designation[]' class='form-control' placeholder='Enter designation' >
        </div>

        <div class='form-group'>
        <label for='dob'>Developers dob <?php echo $i ?></label>
        <input id='dob' type='text' name='dob[]' class='form-control' placeholder='dob eg:1999-12-22' >
        </div> 
        <hr style='width: 100%; color: black; height: 1px; background-color:black;' />
        
    <?php  }?> 
    <div class='form-group'> <button type='submit' class='btn btn-primary' name='done'>SUBMIT</button></div>
     </form>
    <?php }?>




</body>
</html>