<?php


include("includes/header.php"); ?> 
<?php
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
    <link rel="stylesheet" href="css/search.css">
    


    <script>
         function newtab(){
     
          var v=document.querySelector("#s").value;
          if(v.slice(0,4)!='http'){
            v='http://'+v;
            
          }
          window.open(v);
         }
    </script>
        
        <style>
            body{
                background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);


            }
            .btn-search{
                width: 126px;
                height: 54px;
            }
  
         button:hover{
            background:orange;
         } 
        </style>

</head>
<body>
<div class="maincontainer" style="text-align:center;">
    <h1>WEBSTATS</h1>

        <form action="search.php" method="POST">
        <input id="s" type="search" name="search" autocomplete="off" value="<?php getInputValue('search') ?>" required  placeholder="Search..." class="searchbar">
        <br><br>    
        <button  class="btn btn-search" type="submit" name="visit" onclick="newtab()"> <i class="fa fa-search fa-fw"></i> Visit </button>    
        </form>
        
        <?php
        if (isset($_POST['visit'])) {
            $url=$_POST['search'];
            echo $url;

            $q="INSERT INTO Visits VALUES(CURDATE(),CURTIME(),'$userLoggedIn','$url')";  ;
            $result=$con->query($q);
            if($result==true){
                echo "insert success";
            }else{
                echo mysqli_error($con);
            }     
        }
        ?>
 </div>
 <br><br><br><br><br><br><br><br><br><br>
    <span> To register your website</span>
    <a href="create.php" style="color:#fff;">Click here</a>  <br>

<span>To know number of visitors </span>

<form  action="logs.php" method="POST">
<button class="btn btn-success" type="submit" name="viewlogs">View Logs</button>
</form>


</body>
</html>