<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download CSV File</title>
    <link rel="stylesheet" href="styleDownload.css">
</head>

<?php

// Retrieve session variables that were set on previous page
// $TxtFileName = "Converted" . $_SESSION["FileName"] . ".txt";
// $PdfFileName = $_SESSION["PDF"];

//Display the button to let user download the converted text file
//echo '<a href="download/text.txt" download= "' . $convertedFileName . '" > <button>Click here to download</button> </a>';

//Delete .pdf file
// $path = "C:\Program Files\XAMPP\htdocs\CAT201 Assignment 1\upload\upload.xlsx";
// unlink($path);

// Remove all session variables
// session_unset();

// // Destroy the session
// session_destroy();
?>

<body>

    <ul class="topNav">
        <li><a href="index.html">Home</a></li>
        <li><a href="index.html#member">Group Member Details</a></li>
    </ul>

    <img class="birds" src="birdsflying.gif">

    <div class="downloadMessage">
        <h1>
            Please click on the Download Button to get the CSV file.
        </h1>
        <button class="dwnld">
            <a href="converted\converted.csv" download>Download CSV</a>
        </button>
    </div>

    <div class="convertRepeat">
        <h1>
            Do you want to convert another Excel File into CSV File? <br>
            Click the button below to convert another file.
        </h1>
        <button class="backIndex">
            <a href="index.html">Convert Another File</a>
        </button>
    </div>

</body>