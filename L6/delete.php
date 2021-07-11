<?php

    require 'connect.php';
    echo "<br><a href='index.html'>Home</a><br>";
    $id=$_GET['id'];

    $sql="delete from library where acc_no=\"$id\"";
    $result=mysqli_query($conn,$sql);
    echo $id." deleted";
    

?>