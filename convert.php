<?php
$target_file_dir="C:/Program Files/XAMPP/htdocs/CAT201-Assignment-1/upload/upload.xlsx";
$output_file_dir="C:/Program Files/XAMPP/htdocs/CAT201-Assignment-1/converted/converted.csv";


exec("java -jar ConvertExceltoCSV.jar $target_file_dir $output_file_dir");

include 'converting-page.html';
?>
