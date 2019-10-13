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
  $q="SELECT visitor_name,visitor.visitor_id,vdate,vtime,website_url FROM visitor JOIN visits ON visitor.visitor_id=visits.visitor_id;";
  $result=$con->query($q) or die($mysqli->error);    //an array
 
 ?>

<p>All visitor details and the website visited: </p>
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
    <div class="row">
        <div class="form-group col-lg-6" >
                        <label>   Website URL:</label>
                        <input  style="width:450px" type="text" name="websiteurl" id="websiteurl" class-"form-control" placeholder="website_url" required>
        </div>

        
        <button style=" height:40px;width:150px;margin-top:-5px" name="submitwebsite" class="btn btn-warning" type="submit">Submit</button>
        
    </div>
</form>

<?php
    if (isset($_POST['submitwebsite']) && isset($_POST['websiteurl'])) {
        $s=$_POST['websiteurl'];
        $q="SELECT visitor_name,visitor.visitor_id,vdate,vtime,website_url FROM visitor JOIN visits ON visitor.visitor_id=visits.visitor_id where website_url='$s';";
        $result=$con->query($q) or die($mysqli->error);    //an array ?>
      <p>All visitor details who have visited <?php echo  $s ?> </p>
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
<?php while ($row=$result->fetch_assoc()) {  ?>
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
        
        
        
        
<?php
        
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