
	
		<div style="min-height: 720px;" class="container">
			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url()."home/insert" ?>">
                
	            <label>title :</label>
	            <input type="text" name="username" class="form-control" value=""/> <br/>
	            <label>content :</label> <input type="text" name="pass" class="form-control" value=""/> <br/>
	            <label>file :</label> <input type="file" name="file" class="form-control" value=""/> <br/>
	            <input class="btn btn-success" type="submit" name="ok" value="Add"/>
        	</form>
		</div>
	
