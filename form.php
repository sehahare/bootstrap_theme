<?php
include_once 'config.php';
?>

<?php

$name=trim($_POST['name']);
$email=trim($_POST['email']);
$comments=trim($_POST['comments']);

if(isset($_POST['send_data'])){
     $sql="INSERT INTO `band_table` (`name`,`email`,`comment`) VALUES('$name','$email','$comments')";
  mysql_query($sql);
  
  
  }


?>

<script>
  alert('Thank you for sending mail. We will answer you as soon as possible');
        window.location.href='index.php';
        </script>
  
    
