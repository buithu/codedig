<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<body>
	
		<div class="container">
			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url()."home/insert" ?>">
                
	            <label>title :</label>
	            <input type="text" name="username" class="form-control" value=""/> <br/>
	            <label>content :</label> <input type="text" name="pass" class="form-control" value=""/> <br/>
	            <label>file :</label> <input type="file" name="file" class="form-control" value=""/> <br/>
	            <input class="btn btn-success" type="submit" name="ok" value="Add"/>
        	</form>
		</div>
	
</body>
</html>