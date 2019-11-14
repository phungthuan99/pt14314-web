<?php 
$pwd = '123456';
var_dump(md5($pwd));
$pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
var_dump($pwdHash);
var_dump(password_verify('123456', '$2y$10$bigvP9SFvVXcWFeQ3zxVb.hnk0lICpomtAPcAQ7xFq.WmMfyQTXFO'));

 ?>