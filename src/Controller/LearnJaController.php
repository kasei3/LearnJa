<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Rank Controller
 *
 * @property \App\Model\Table\RankTable $Rank
 *
 * @method \App\Model\Entity\Rank[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LearnJaController extends AppController {

	public function initialize() {
		parent::initialize();
		$this->loadComponent('Paginator');
		$this->loadComponent('Flash'); // Include the FlashComponent
	}


	/**
	 * Index method
	 *
	 * @return \Cake\Http\Response|void
	 */
	public function index() {

	}

	/**
	 * 单词列表
	 */
	public function wordList() {

	}

	/*
	 * 输入法学习
	 */
	public function typing() {

	}

	/**
	 * 单词练习
	 */
	public function words() {
		$this->loadModel("Course");
		$courses = $this->Course->find("all", [
			'conditions' => [
				'course_id' => 3
			]
		])->contain(['Unit']);
		foreach ($courses as $course) {
			debug($course);
		}
	}

	/**
	 * 每日一句
	 */
	public function oneSentencePerDay() {
		$this->loadModel("Sentence");
		$sentenceList = $this->Sentence->find("all");

		$this->set("sentenceList", $sentenceList);
	}

	public function addSentence($id) {

	}

	/**
	 * 练习
	 */
	public function testS() {
		$this->loadModel('Word');

		//		$words = $this->Paginator->paginate($this->Word->find());
		$words = $this->Word->find('all');

		foreach ($words as $word) {
			debug($word);
		}
	}

	public function testM() {

	}

	// 我的句库
	public function SentenceCollect() {
		$this->disableAutoRender();

		$this->loadModel('Sentence');

		$this->Sentence->get(1);
		



	}

}
