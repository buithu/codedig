<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<?php 
		foreach($dl as $result) {

	?>
	<div class="container">
			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url()."home/edit/". $result->stt; ?>">
                <input  type="text" name="stt" class="form-control hidden" value="<?php echo $result->stt; ?>"/>
	            <label>title :</label>
	            <input type="text" name="username" class="form-control" value="<?php echo $result->tit; ?>"/> 
	            <label>content :</label>
	             <textarea type="text" name="pass" class="form-control" value="<?php echo $result->con; ?>"> </textarea>
	            <input class="btn btn-success" type="submit" name="ok" value="Add"/>
        	</form>
		</div>


	<?php
            
        }
	 ?>
</body>
</html>