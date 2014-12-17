<form action="handle.php" target="my-iframe" method="post" enctype="multipart/form-data">
			
  <label for="text">Some text:</label>
  <input type="text" name="text" id="text">

<input type="file" name="fileToUpload" id="fileToUpload">

  <input type="submit" value="post">
			
</form>

<?php 
echo uniqid();
?>
		
<iframe name="my-iframe" src="handle.php"></iframe>
