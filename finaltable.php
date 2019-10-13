<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Eater" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Cormorant+Unicase" rel="stylesheet">
</head>
<body>
    
 <?php 
  include('config.php');


 

  if (isset($_POST["done"])) {                 //done is defined in finaltable.phpprevious developers page but form action=finaltable.php in prev developers page. hence php code is ddefined in 
      // Check if any option is selected
      for($i=0;$i< $_SESSION['no'];$i++){
          echo $_POST['dob'][$i];
  
          $website_url= $_SESSION['website_url'];
          $fname=$_POST['fname'][$i];
          $lname=$_POST['lname'][$i];
          $gender=$_POST['gender'][$i];
          $designation=$_POST['designation'][$i];
          $dob=$_POST['dob'][$i];
  
  
          $q="INSERT INTO Developer(first_name,last_name,gender,designation,DOB,website_url) VALUES('$fname','$lname','$gender','$designation','$dob','$website_url');"; 
          $result=$con->query($q);
          if($result==true){
              echo "insert success";
          }else{
              echo mysqli_error($con);
          }
      
      }
      if (isset($_POST["fname"]) and isset($_POST["lname"]) and isset($_POST["gender"]) and isset($_POST["designation"]) and isset($_POST["dob"])  ) {
          // Retrieving each selected option
          foreach ($_POST['dob'] as $subject) {
              print "You selected $subject<br/>";
          }
      }
  }
  



  $q="SELECT * from developer"; 
  $result=$con->query($q) or die($mysqli->error);    //an array
 
 ?>

<p>All Developer details: </p>
<div class="justify-content-center">
	<table class="table table-bordered table-striped">
		<thead>
			<tr class="bg-dark text-white">
				<th>Developer id</th>
				<th>first name</th>
				<th>last name</th>
			    <th>gender</th>
                <th>designation</th>
                <th>DOB</th>
                <th>website_url</th>
            </tr>
		</thead>

<!--$row is array that fetchs records-->
<?php while($row=$result->fetch_assoc()){  ?>
<tr>
	<td><?php echo $row['developer_id'];?></td>            
	<td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['last_name'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['designation'];?></td>
    <td><?php echo $row['DOB'];?></td>
    <td><?php echo $row['website_url'];?></td>
    
    
	
</tr>
<?php } ?>
</table>
</div>


<p>Enter the website url below to see info of developers working on the website</p>
<form action="finaltable.php" method="POST">
    <div class="form-group">
                    <label>Website URL:</label>
                    <input type="text" name="websiteurl2" id="websiteurl" class-"form-control" placeholder="website_url" required>
    </div>
    <button name="submitwebsite2" class="btn btn-warning" type="submit">Submit</button>
</form>




<?php 
 if (isset($_POST['submitwebsite2']) && isset($_POST['websiteurl2'])) { 
   $s=$_POST['websiteurl2']; 
?>
 
<!--Developerd working on only websiteurl inputed by user-->
<p>All Developer details who are working in <?php echo $_POST['websiteurl2'];?> </p>
<div class="justify-content-center">
	<table class="table">
		<thead>
			<tr>
				<th>Developer id</th>
				<th>first name</th>
				<th>last name</th>
			    <th>gender</th>
                <th>designation</th>
                <th>DOB</th>
                <th>website_url</th>
            </tr>
		</thead>

<!--$row is array that fetchs records-->
<?php
 $q="SELECT * from developer WHERE website_url='$s'; "; 
 $result=$con->query($q) or die($mysqli->error);    //an array

while($row=$result->fetch_assoc()){  ?>
<tr>
	<td><?php echo $row['developer_id'];?></td>            
	<td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['last_name'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['designation'];?></td>
    <td><?php echo $row['DOB'];?></td>
    <td><?php echo $row['website_url'];?></td>
    
    
	
</tr>
<?php } ?>
</table>
</div>


     
    
    
    
    
    
<?php 
    
     echo '<span>No of developers working on ' . $s .' is: </span>';
     $q="SELECT count(*) FROM developer WHERE website_url='$s';";
     $result=$con->query($q) or die($mysqli->error);    //an array
     $row=$result->fetch_array(MYSQLI_NUM);
     echo $row[0];
 }
?>
<hr>
<span> Click here to go: </span>
<a href="index.php">Home</a>
</body>
</html>