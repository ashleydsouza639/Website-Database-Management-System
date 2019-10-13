<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    
 <?php 
  include('config.php');
  $q="SELECT visitor_name,visitor.visitor_id,vdate,vtime,website_url FROM visitor JOIN visits ON visitor.visitor_id=visits.visitor_id;";
  $result=$con->query($q) or die($mysqli->error);    //an array
 
 ?>


<div class="justify-content-center">
<table class="table table-bordered table-striped">
		<thead>
			<tr class="bg-dark text-white">
				<th>Visitor's Name</th>
				<th>username</th>
				<th>Visit Date</th>
			    <th>Visit Time</th>
                <th>Website visited</th>
            </tr>
		</thead>

<!--$row is array that fetchs records-->
<?php while($row=$result->fetch_assoc()){  ?>
<tr>
	<td><?php echo $row['visitor_name'];?></td>            
	<td><?php echo $row['visitor_id'];?></td>
    <td><?php echo $row['vdate'];?></td>
    <td><?php echo $row['vtime'];?></td>
    <td><?php echo $row['website_url'];?></td>
    
	
</tr>
<?php } ?>
</table>
</div>
<br>
<p>Enter the website url below to get number of visitors visiting your website</p>
<form action="logs.php" method="POST">
    <div class="form-group">
                    <label>Website URL:</label>
                    <input type="text" name="websiteurl" id="websiteurl" class-"form-control" placeholder="website_url" required>
    </div>
    <button name="submitwebsite" class="btn btn-warning" type="submit">Submit</button>
</form>

<?php
    if(isset($_POST['submitwebsite']) && isset($_POST['websiteurl']) ){
        $s=$_POST['websiteurl'];
        echo '<span>No of visitors visited ' . $s .' is: </span> ';
        $q=" SELECT COUNT(*) FROM visits WHERE website_url='$s';";
        $result=$con->query($q) or die($mysqli->error);    //an array
        $row=$result->fetch_array(MYSQLI_NUM);
        echo $row[0]; 
    };
?>
<br>
<a href="search.php">Click here to go back</a>

</body>
</html>