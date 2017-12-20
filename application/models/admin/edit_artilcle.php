
	<?php 
		foreach($dl as $result) {
	?>
	<div style="min-height: 720px;" class="container">
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
