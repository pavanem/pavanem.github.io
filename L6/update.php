

<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <?php
            require 'connect.php';
            echo "<br><a href='index.html'>Home</a>";
            $id=$_GET['id'];
        ?>
        <?php
            $sql="select * from library where acc_no=\"$id\"";
            $result=mysqli_query($conn,$sql);

            $row=mysqli_fetch_array($result);
            $acc_no=$row['acc_no'];
            $title=$row['title'];
            $author=$row['author'];
            $edition=$row['edition'];
            $pub=$row['publisher'];

        ?>
        <form action="edit.php" method="post">
            <label for="acc_no">Accession Number:</label><br>
            <input type="text" id="accno" name="acc_no" value='<?php echo $acc_no;  ?>'><br><br>

            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value='<?php echo $title;  ?>'><br><br>

            <label for="author">Author:</label><br>
            <input type="text" id="author" name="author" value='<?php echo $author;  ?>'><br><br>

            <label for="edition">Edition:</label><br>
            <input type="text" id="edition" name="edition" value='<?php echo $edition;  ?>'><br><br>

            <label for="pub">Publisher:</label><br>
            <input type="text" id="pub" name="pub" value='<?php echo $pub;  ?>'><br><br>

            <input type="submit" name="update" value="update">
        </form>
</body>
</html>