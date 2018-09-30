<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Content-Type: application/json');
include_once("dao/conn.php");
include_once("obj/Result.php");
include_once("util/commonUtil.php");
include_once("dao/RankDAO.php");

$gets = $_POST;
if (empty($gets['name'])){
	$r = new Result( false, "姓名不能为空。");
	echo $r->getDicResult();
	return;
} else {
	$name = $gets['name'];
}
if (empty($gets['zhandouli'])){
	$r = new Result( false, "战斗力不能为空。");
	echo $r->getDicResult();
	return;
} else {
	$zhandouli = $gets['zhandouli'];
}

// 获取数据库连接
$conn = getConn();

// 写入数据
$add = addRank($name, $zhandouli);


if ($add == 0) {
	$r = new Result( false, "系统错误。");
	echo $r->getDicResult();
	debug($add);
	return;
}

// 读取排名数据
$rankList = selectTopRank();
if ($rankList === false) {
	$r = new Result( false, "读取数据错误。");
	echo $r->getDicResult();
	return;
}

$myRank = selectRankByName($name, $zhandouli);


//$tmp = [];
//$x=0;
//$x = 0;
//foreach ($rankList as $rank){
//	$z=0;
//	foreach ($rank as $key=>$paras){
//		$tmpZ[$z] = $paras;
//		$z++;
//	}
//	$tmp[][] = $tmpZ;
//	$x++;
//}

foreach ($rankList as $i=>$rank){
	$rankList[$i]['rank'] = $i+1;
}

echo json_encode(compact('rankList','myRank'));




