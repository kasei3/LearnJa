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
class RankController extends AppController {

	/**
	 * Index method
	 *
	 * @return \Cake\Http\Response|void
	 */
	public function index() {
		$rank = $this->paginate($this->Rank);

		$this->set(compact('rank'));
	}

	/**
	 * View method
	 *
	 * @param string|null $id Rank id.
	 * @return \Cake\Http\Response|void
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null) {
		$rank = $this->Rank->get($id, [
			'contain' => []
		]);

		$this->set('rank', $rank);
	}

	//    /**
	//     * Add method
	//     *
	//     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
	//     */
	//    public function add()
	//    {
	//        $rank = $this->Rank->newEntity();
	//        if ($this->request->is('post')) {
	//            $rank = $this->Rank->patchEntity($rank, $this->request->getData());
	//            if ($this->Rank->save($rank)) {
	//                $this->Flash->success(__('The rank has been saved.'));
	//
	//                return $this->redirect(['action' => 'index']);
	//            }
	//            $this->Flash->error(__('The rank could not be saved. Please, try again.'));
	//        }
	//        $this->set(compact('rank'));
	//    }


	/**
	 * Edit method
	 *
	 * @param string|null $id Rank id.
	 * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null) {
		$rank = $this->Rank->get($id, [
			'contain' => []
		]);
		if ($this->request->is([
			'patch',
			'post',
			'put'
		])) {
			$rank = $this->Rank->patchEntity($rank, $this->request->getData());
			if ($this->Rank->save($rank)) {
				$this->Flash->success(__('The rank has been saved.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('The rank could not be saved. Please, try again.'));
		}
		$this->set(compact('rank'));
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id Rank id.
	 * @return \Cake\Http\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null) {
		$this->request->allowMethod([
			'post',
			'delete'
		]);
		$rank = $this->Rank->get($id);
		if ($this->Rank->delete($rank)) {
			$this->Flash->success(__('The rank has been deleted.'));
		} else {
			$this->Flash->error(__('The rank could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
