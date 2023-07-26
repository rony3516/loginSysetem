<?php
$Name= $_REQUEST["Name"];
echo "Name:".$Name;
echo "<br>";
echo "<br>";
$Email=$_REQUEST["Email"];
echo "Email:".$Email;
$password=$_REQUEST["password"];
strlen($password);

/* profile imge work start*/
$pro =$_FILES["file"];
$name=$pro["name"];
$tmp_name=$pro["tmp_name"];
if(!empty($name)){
  $loc="uplood/";
  if(move_uploaded_file($tmp_name, $loc.$name)){
   $path= $loc.$name;
       echo "<img src='$path' width='150px'; height='150px'  >";
       echo "<br>";
       echo "successful!";}
  else{
        echo "uplod filed";
        }
      }
else{
     echo "file not found";
    }
/* profile imge work start*/



