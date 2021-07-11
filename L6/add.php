<?php 
            require 'connect.php'; 
            
        
            $sql="insert into library (acc_no,title,author,edition,publisher) values(?,?,?,?,?)";
            $stmt=$conn->prepare($sql);

            $stmt->bind_param('issis',$_GET['acc_no'], $_GET['title'], $_GET['author'],$_GET['edition'],$_GET['pub']);
            echo "<br><a href='index.html'>Home</a><br>";
            if($stmt->execute()){
                echo "Record was inserted.";
            }else{
                die('Unable to save record.');
            }
            
            
        
        
        
?>