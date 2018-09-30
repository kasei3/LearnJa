<?php
/**
 * Created by PhpStorm.
 * User: kasei
 * Date: 2018-06-24
 * Time: 22:46
 */
function debug($data) {
	echo __LINE__;
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

function packD($tmp) {
	$tmp1['c2dictionary'] = true;
	$tmp1['data']=$tmp;
	return $tmp1;
}
function packA($tmp) {
	$tmp1['c2array'] = true;
	$tmp1['data']=$tmp;
	return $tmp1;
}