<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="POST">
<?php
$d=2;
echo "gender$d";
for ($i=0;$i<2;$i++) {?>

<input type='radio' name='gender<?php echo $i?>[]' value='female'>Female
        <input type='radio' name='gender<?php echo $i?>[]' value='male'>Male

        
        <?php  }?> 
    <div class='form-group'> <button type='submit' class='btn btn-primary' name='s'>SUBMIT</button></div>
     </form>
    
        </form>
        <?php
        if(isset($_POST['s'])){
               
        print_r($_POST);
        $a=array(1=>3,2=>2);
        echo implode(',',$_POST);
               
            
           
            
        }
        ?>
</body>
</html>