<?php
include('sessionHandling.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $upload_dir = "uploads";
   if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
      $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
        
      // Ignore any path information in the filename
      $name = basename($_FILES["fileToUpload"]["name"]);
        
      // Move the temp file and give it a new name 
      move_uploaded_file($tmp_name, "$upload_dir/$name"); 
	  redirect("gallery.php", "Image was uploaded successfully!"); ?>
      <p>The file <?= $name ?> has been uploaded.</p>
   <?php } else { ?>
      <p>Error uploading the file.</p>
   <?php }
}
?>