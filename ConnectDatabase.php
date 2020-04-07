<?php

//Thông số kết nối Database

$servername = "localhost"; //Địa chỉ IP của máy chủ chứa Database

$username = "root"; //Tên đăng nhập

$password = ""; //Mật khẩu truy cập 

$dbname = "blogs"; //Tên database muốn kết nối đến


// Tạo kết nối đến CSDL

$conn = new mysqli($servername,$username,$password,$dbname);

//Câu lệnh truy vấn
$query = "SELECT * FROM posts";

//Thực hiện câu lệnh
$result = $conn->query($query);

//Tạo mảng để chứa data
$posts = array();

while($row = $result->fetch_assoc())
	$posts[] = $row;

//In kết quả
foreach($posts as $post)
{
	echo "<pre>";
		print_r($post);
	echo "</pre>";
}
?>