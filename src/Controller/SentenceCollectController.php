<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SentenceCollect Controller
 *
 * @property \App\Model\Table\SentenceCollectTable $SentenceCollect
 *
 * @method \App\Model\Entity\SentenceCollect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SentenceCollectController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sentences', 'Users']
        ];
        $sentenceCollect = $this->paginate($this->SentenceCollect);

        $this->set(compact('sentenceCollect'));
    }

    /**
     * View method
     *
     * @param string|null $id Sentence Collect id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sentenceCollect = $this->SentenceCollect->get($id, [
            'contain' => ['Sentences', 'Users']
        ]);

        $this->set('sentenceCollect', $sentenceCollect);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sentenceCollect = $this->SentenceCollect->newEntity();
        if ($this->request->is('post')) {
            $sentenceCollect = $this->SentenceCollect->patchEntity($sentenceCollect, $this->request->getData());
            if ($this->SentenceCollect->save($sentenceCollect)) {
                $this->Flash->success(__('The sentence collect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sentence collect could not be saved. Please, try again.'));
        }
        $sentences = $this->SentenceCollect->Sentences->find('list', ['limit' => 200]);
        $users = $this->SentenceCollect->Users->find('list', ['limit' => 200]);
        $this->set(compact('sentenceCollect', 'sentences', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sentence Collect id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sentenceCollect = $this->SentenceCollect->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sentenceCollect = $this->SentenceCollect->patchEntity($sentenceCollect, $this->request->getData());
            if ($this->SentenceCollect->save($sentenceCollect)) {
                $this->Flash->success(__('The sentence collect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sentence collect could not be saved. Please, try again.'));
        }
        $sentences = $this->SentenceCollect->Sentences->find('list', ['limit' => 200]);
        $users = $this->SentenceCollect->Users->find('list', ['limit' => 200]);
        $this->set(compact('sentenceCollect', 'sentences', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sentence Collect id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sentenceCollect = $this->SentenceCollect->get($id);
        if ($this->SentenceCollect->delete($sentenceCollect)) {
            $this->Flash->success(__('The sentence collect has been deleted.'));
        } else {
            $this->Flash->error(__('The sentence collect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
