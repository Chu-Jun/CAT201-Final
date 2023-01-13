<?php
//Start the session to record PDF file name
session_start();
?>

<html>
<head>
    <title>Xlsx to CSVConverter</title>
</head>

<?php
// //Specific the directory where the file is going to be placed
// $target_dir = "C:\Program Files\XAMPP\htdocs\CAT201 Assignment 1\upload\ ";

// //Specific the path of the file to be uploaded
// $target_file = $target_dir . basename($_FILES["uploadFile"]["name"]);

// //Set session variable to record PDF file name
// $_SESSION["FileName"] = basename($target_file, '.xlsx');
// $_SESSION["XLSX"] = basename($target_file);

// //Convert all characters to lowercase
// $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $dest_path = 'C:\Program Files\XAMPP\htdocs\CAT201-Assignment-1\upload\upload.xlsx';

    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $dest_path)) {
        $response = 1;
        include 'convert.php';
    } else {
        echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
        include 'index.html';
    }

    echo $response;

// }
?>
</html>