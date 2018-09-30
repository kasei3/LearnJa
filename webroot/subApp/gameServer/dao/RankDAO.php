<?php
include_once("dao/conn.php");

// 写入数据
function addRank($name, $zhandouli) {
	$conn = getConn();
	$sql = "INSERT INTO `rank` (`name`, `point`) VALUES ('{$name}', '{$zhandouli}')";
	$result = $conn->query($sql);
	return $result;
}

function selectTopRank($limit = 10){
	$conn = getConn();
	$sql = "SELECT
game_server.rank.id,
game_server.rank.`name`,
game_server.rank.point
FROM
game_server.rank
ORDER BY
game_server.rank.point DESC
LIMIT {$limit}";
	$result = $conn->query($sql);

	// 判断执行结果
	if ($result->num_rows == 0) {
		// 没有数据
		return false;
	}

	$data = [];
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	return $data;
}


function selectRankByName($name,$point){
	$conn = getConn();
	$sql = "SELECT id, name, point, FIND_IN_SET( point, (
SELECT GROUP_CONCAT( point
ORDER BY point DESC ) 
FROM rank )
) AS ran
FROM rank
WHERE
rank.`name` = \"{$name}\" AND rank.`point`={$point}
ORDER BY
rank.point DESC
";
	$result = $conn->query($sql);

	// 判断执行结果
	if ($result->num_rows == 0) {
		// 没有数据
		return false;
	}

	$data = [];
	while ($row = $result->fetch_assoc()) {
		$data[] = $row;
	}
	return $data;
}
?>