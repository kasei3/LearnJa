<?php
/**
 * 返回结果的基类
 * Class Result
 */
class Result{
	// 处理结果
	var $result;
	// 消息
	var $message;
	// 数据
	var $data;

	function __construct($result = true, $message = "success", $data = []) {
		$this->result = $result;
		$this->message = $message;
		$this->data = $data;
	}

	// 获取字典型的返回值
	function getDicResult(){
		$this->data['result'] = $this->result;
		$this->data['message'] = $this->message;

		$data = [
			"c2dictionary"=>true,
			"data" => $this->data
		];
		return json_encode($data);
	}

	//TODO 未完成
	function getArrayResult() {
//		// 结果
//		$tmpData[0][0][0] = $this->result;
//		// 消息
//		$tmpData[0][0][1] = $this->message;
//		$tmpData[0][0][2] = 'nothing';
//
//
//		foreach ($this->data as $d){
//			$tmpData[] = $d;
//		}


		$tmpData = $this->data;

		if(gettype($tmpData)=="array" ){
			$size1 = count($tmpData);
		} else {
			$size1 = 1;
		}
		// 因为第3个开始才是数据,
		if(gettype($tmpData[1]) == "array") {
			$size2 = count($tmpData[0]);
		} else {
			$size2 = 1;
		}
		if(gettype($tmpData[1][0]) == "array") {
			$size3 = count($tmpData[1][0]);
		} else {
			$size3 = 1;
		}


			// 数组方式
		$data = [
			"c2array" => true,
			// TODO size 需要计算出来
			"size" => [
				$size1,$size2,$size3
			],
			"data" => array_values($tmpData)
		];
		return json_encode($data);
	}
}
