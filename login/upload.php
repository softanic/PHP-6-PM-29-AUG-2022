<?php
echo "<pre>";
print_r($_POST);
echo "<br>";
print_r($_FILES);
$photo_tmp= $_FILES['photo']['tmp_name'];
$photo_name="uploads/".$_FILES['photo']['name'];
move_uploaded_file($photo_tmp,$photo_name);
?>