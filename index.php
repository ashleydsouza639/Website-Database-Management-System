<?php

include('config.php');

function getInputValue($name) {            //called in value attribute echo to remember inputs 
		if(isset($_POST[$name])) {
			echo  $_POST[$name];
		}
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
         function newtab(){
          document.querySelector("h2").style.color="red";
          var v=document.querySelector("#s").value;
          if(v.slice(0,4)!='http'){
            v='http://'+v;
            
          }
          window.open(v);
         }
        </script>
        
</head>
<body>
<h2>WEBSTATS</h2>

    <form action="index.php" method="POST">
    <input id="s" type="search" name="search" autocomplete="off" value="<?php getInputValue('search') ?>" required>
    <button type="submit" name="visit" onclick="newtab()">Visit</button>    
    </form>
    
    <?php
    if (isset($_POST['visit'])) {
        $url=$_POST['search'];
        echo $url;
        $q="INSERT INTO Visits VALUES(CURDATE(),CURTIME(),'ashleydsouza882','$url')";  ;
        $result=$con->query($q);
        if($result==true){
            echo "insert success";
        }else{
            echo mysqli_error($con);
        }     
    }
    ?>

    <p> To register your website</p>
    <a href="create.php">Click here</a>

<p>To know number of visitors </p>

<form  action="logs.php" method="POST">
<button type="submit" name="viewlogs">View Logs</button>
</form>

</form>
</body>
</html>