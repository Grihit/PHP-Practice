<?php
$target_dir = "DATA/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
else if ($_FILES["upload"]["size"] > 5*1024*1024) {
  echo "Sorry, your file is larger than 5MB. <br>";
  $uploadOk = 0;
}
else if($FileType != "pdf") {
  echo "Sorry, only PDF is allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
