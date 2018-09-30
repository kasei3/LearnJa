<?php
/**
 * 获取数据库连接
 * @return mysqli
 */
function getConn($dbname = "game_server") {

	// 从配置文件中读取数据库配置
	$servername = "35.234.15.86";
	$username = 'root';
	$password = 'mysqladmin';

	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	// 检测连接
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	}
	// 设置连接编码
	mysqli_set_charset($conn,"utf8");

	return $conn;
}
