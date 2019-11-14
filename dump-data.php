<?php 
require_once './commons/db.php';
require_once './commons/constants.php';
require_once './libs/Faker/autoload.php';

$faker = Faker\Factory::create();

// $name = $faker->name('female');
// $company = $faker->company;
// $now = $faker->date($format = 'Y-m-d', $max = 'now'); 
// var_dump($name, $company, $now);die;

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
for ($i=0; $i < 10; $i++) { 
	$name = $faker->name('female');
	$desc = $faker->realText($maxNbChars = 200, $indexSize = 2);
	$showMenu = rand(0, 1);
	$sql = "insert into categories (name, description, show_menu)
			values ('$name', '$desc', $showMenu)";
	executeQuery($sql);
}
// tạo dữ liệu mẫu cho bảng products
// tạo dữ liệu mẫu cho bảng product_galleries
// tạo dữ liệu mẫu cho bảng vouchers

 ?>