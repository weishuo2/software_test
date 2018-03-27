<!DOCTYPE>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> 注册成功！</title>
</head>
<body>
<h1>你已经注册成功啦！</h1>
<p>你的邮箱是：
<?php 
$address = htmlspecialchars($_POST["address"]);
echo $address;
?>
</p>
<p>你的“邮箱+密码”的md5值是：
<?php
$password = htmlspecialchars($_POST["password"]);
$md5sum = md5($address . $password);
echo $md5sum;
$db_server = "localhost";
$db_user = "db_user";
$db_pass = "password";
$db_name = "segmentfault";
$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
 
if (mysqli_connect_errno()) {
 trigger_error("Database connection failed: " . mysqli_connect_error(), E_USER_ERROR);
}
$sql = "CREATE TABLE user(username CHAR(140), password CHAR(140))";
mysqli_query($conn, "INSERT INTO user (username, password) VALUES ($username, $md5sum)");
mysqli_close($conn);
 
?>
</p>
</body>
 
</html>