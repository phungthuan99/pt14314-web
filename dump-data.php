<?php 
require_once './commons/db.php';
require_once './commons/constants.php';
// tạo dữ liệu mẫu cho bảng roles
$roles = [
	[
		'name' => 'member',
		'status' => ROLE_ACTIVE
	],
	[
		'name' => 'admin',
		'status' => ROLE_ACTIVE
	],
];

foreach($roles as $r) {
	extract($r);
	$sql = "insert into roles (name, status)
			values ('$name', $status)";
	// executeQuery($sql);
}
// tạo dữ liệu mẫu cho bảng users
$users = [
	[
		'name' => 'John Smith',
		'email' => "john@gmail.com",
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id' => 1
	],
	[
		'name' => 'Adam Smith',
		'email' => "adam@gmail.com",
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id' => 1
	],
	[
		'name' => 'John Collins',
		'email' => "collins@gmail.com",
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id' => 2
	],
];

// tạo dữ liệu mẫu cho bảng categories
// tạo dữ liệu mẫu cho bảng products
// tạo dữ liệu mẫu cho bảng product_galleries
// tạo dữ liệu mẫu cho bảng vouchers

 ?>