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
    
<div class="justify-content-center" >
	<form action="developers.php" method="POST" >

    <div class="form-group">
		<label for="website_name">Website Name</label>
	    <input id="website_name" type="text" name="name" class="form-control" placeholder="Enter website name" >
    </div>



    <div class="form-group">
		<label for="website_type">Website Name</label>
	    <input id="website_type" type="text" name="website_type" class="form-control" placeholder="Enter website type" >
    </div>

    <div class="form-group">
		<label for="website_url">Website URL</label>
	    <input id="website_url" type="text" name="website_url" class="form-control" placeholder="Enter website url" >
    </div>
    <div class="form-group">
		<label for="noofdevelopers">No. of Developers</label>
	    <input id="noofdevelopers" type="text" name="noofdevelopers" class="form-control" placeholder="Enter no of developers" >
    </div>
    <p> click submit to enter info about developers</p>
    <div class="form-group">
         <button type="submit" class="btn btn-primary" name="save">SUBMIT</button>
    </div>
 
    
     
    </form>
</div>
</body>
</html>