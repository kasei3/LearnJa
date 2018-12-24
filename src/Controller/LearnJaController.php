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

	public function initialize()
	{
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
	public function wordList(){

	}

	/*
	 * 输入法学习
	 */
	public function typing(){

	}

	/**
	 * 单词练习
	 */
	public function words(){

	}

	/**
	 * 练习
	 */
	public function testS(){
	$this->loadModel('Word');

//		$words = $this->Paginator->paginate($this->Word->find());
		$words = $this->Word->find('all');

		foreach ($words as $word) {
			debug($word);
		}

	}

	public function testM(){

	}

}
