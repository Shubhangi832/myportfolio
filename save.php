<?php
  
    $con= mysqli_connect("localhost","root","","portfolio");

    mysqli_query($con,"insert into inquiry(name,email,phone,message)values('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')");

    
    

?>