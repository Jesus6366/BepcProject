<?php
//getting the uploaded file
$file = $_FILES["file"];


//uploading in upload folder

move_uploaded_file($file["tmp_name"], "uploads/".$file["name"]);

//redirecting back
header("Location: ".$_SERVER["HTTP_REFERER"]);

?>