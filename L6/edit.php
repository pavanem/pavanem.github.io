<?php
    require 'connect.php';
    echo "<br><a href='index.html'>Home</a><br><br>";
    if (isset($_POST['update']) && $_POST['update'] != '') {
        
        $pub = (!empty($_POST['pub'])) ? $_POST['pub'] : '';
        $title = (!empty($_POST['title'])) ? $_POST['title'] : '';
        $author = (!empty($_POST['author'])) ? $_POST['author'] : '';
        $edition = (!empty($_POST['edition'])) ? $_POST['edition'] : '';
        $id = (!empty($_POST['acc_no'])) ? $_POST['acc_no'] : '';

        if (!empty($id)) {
            // update the record
            $query = "UPDATE library SET title='".$title."',author='".$author."',edition='".$edition."',publisher='".$pub."' WHERE acc_no ='".$id."'";
            

        } else {
            // insert the new record
            $query = "INSERT INTO `library` (publisher,title,author, edition) VALUES ('" . $pub . "', '" . $title . "', '" . $author . "', '" . $edition . "' )";
            //$msg = "add";
           
        }
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Updated record";
        }
    }
?>