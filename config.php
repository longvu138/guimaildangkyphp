<?php 
//buowsc1 :Kết nối sql
$conn = mysqli_connect('localhost', 'root', '', 'thuchanh4');
 if (!$conn) {
     die('Khong the ket noi. Kiem tra lai cac tham so');
     exit();
 }
?>