<?php
$type = $_FILES['filename']['type'];
$size = $_FILES['filename']['size'];
$name = $_FILES['filename']['name'];
$name_tmp = $_FILES['filename']['tmp_name'];
#Here
$extensions =  strtolower(substr($name, strpos($name, '.')+1));
/**
CREATED BY PURUSHOTTAM KAFLE 


**/
$location = "uploads/";
// name of inputting value is 'filename'
#finding move_uploaded_file in temp_name

   if(isset($name)){
     if(!empty($name)){
  if(($extensions=='jpg' || $extensions=='jpeg' || $extensions=='png' || $extensions=='gif')&& $type=='image/jpeg' || $type=='image/png' || $type=='image/gif'){
if(move_uploaded_file($name_tmp, $location.$name)){
  echo "<b>File Uploaded Sucessfully...</b>";
     }
  } else {
    echo "<b> Please Upload a Valid JPEG or JPG File</b>";
}
     } else {
      echo "<b>Empty not allowed!</b>"; 
     }
   } else {
    echo "<b> Please Set a name</b>"; 
   }
?>
