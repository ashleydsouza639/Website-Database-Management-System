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
    

<form action='developers.php' method='POST'>

       <div class='form-group'>
        <label for='fname'>Developers First Name $i</label>
        <input id='fname' type='text' name='fname' class='form-control' placeholder='Enter first name' >
        </div>

        <div class='form-group'>
        <label for='lname'>Developers Last Name $i</label>
        <input id='lname' type='text' name='lname' class='form-control' placeholder='Enter last name' >
        </div>;
      
        <div class='form-group'>
        <label for='dname'>Developers Gender $i</label>
        <input type='radio' name='gender' value='female'>Female
        <input type='radio' name='gender' value='male'>Male
        <input type='radio' name='gender' value='other'>Other<br>;

        <div class='form-group'>
        <label for='designation'>Developers Designation $i</label>
        <input id='desigation' type='text' name='designation' class='form-control' placeholder='Enter designation' >
        </div>;

        <div class='form-group'>
        <label for='dob'>Developers dob $i</label>
        <input id='dob' type='text' name='dob' class='form-control' placeholder='dob eg:1999-12-22' >
        </div> 
        <hr style='width: 100%; color: black; height: 1px; background-color:black;' />
        <div class='form-group'> <button type='submit' class='btn btn-primary' name='done'>SUBMIT</button></div>
</form>
    


<?php
$a=array();
if (isset($_POST['done'])) {
    
    $fname=$_POST['fname'];
    array_push($a, $fname);
    $lname=$_POST['lname'];
    array_push($a, $lname);
    $gender=$_POST['gender'];
    array_push($a, $gender);
    $designation=$_POST['designation'];
    array_push($a, $designation);
    $dob=$_POST['dob'];
    array_push($a, $dob);
    
    

}
?>


</body>
</html>