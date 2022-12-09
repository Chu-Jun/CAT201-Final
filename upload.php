<html>
<head>
    <title>Xlsx to CSVConverter</title>
</head>

<?php

    $dest_path = "C:/Users/User/Documents/CS/Java/new.xlsx";

    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $dest_path)) {
        $response=1;
        include 'convert.php';
    }
    else {
        echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        include 'index.html';
    }

    echo $response;
    exit;
?>
</html>