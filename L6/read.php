<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }

            th {
                text-align: left;
            }

        </style>
        <script>
            function dooit(val,idt){
                if(val==="update"){
                    window.location.href="update.php?id="+idt;
                }
                else{
                    window.location.href="delete.php?id="+idt;
                }
            }
        </script>
    </head>
    <body>
    <h1>Book Collection</h1>
    <a href="index.html">Home</a>
<?php 

require 'connect.php';
mysqli_select_db($conn,"library");
$sql="select * from library";
$query=mysqli_query($conn,$sql);


echo "<table style='border:5px'>
        <tr>
            <th>Accession Number</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Edition</th>
            <th>Publisher</th>
            <th>Actions</th>
        </tr>";
        

        while($arr=mysqli_fetch_array($query)){
            $id=$arr['acc_no'];
            echo "<tr>";
            echo "<td>".$arr['acc_no']."</td>";
            echo "<td>".$arr['title']."</td>";
            echo "<td>".$arr['author']."</td>";
            echo "<td>".$arr['edition']."</td>";
            echo "<td>".$arr['publisher']."</td>";
            echo "<td><button name='update' value='update' onclick='dooit(this.value,".$id.")'>Update</button>";
            echo "<button name='delete' value='delete' onclick='dooit(this.value,".$id.")'>Delete</button></td>";

        }

?>

    </body>
</html>