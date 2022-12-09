<?php
$target_file_dir="C:/Users/User/Documents/CS/Java/new.xlsx";
$output_file_dir="C:/Users/User/Documents/CS/Java/converted.csv";


exec("java -jar ConvertExceltoCSV.jar $target_file_dir $output_file_dir");

include 'converting-page.html';
?>