<?php

//Thông số kết nối Database

$servername = "localhost"; //Địa chỉ IP của máy chủ chứa Database

$username = "root"; //Tên đăng nhập

$password = ""; //Mật khẩu truy cập 

$dbname = "blogs"; //Tên database muốn kết nối đến


// Tạo kết nối đến CSDL

$conn = new mysqli($servername,$username,$password,$dbname);
?>