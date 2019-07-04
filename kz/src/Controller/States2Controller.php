<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * States2 Controller
 *
 * @property \App\Model\Table\States2Table $States2
 *
 * @method \App\Model\Entity\States2[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class States2Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $states2 = $this->paginate($this->States2);

        $this->set(compact('states2'));
    }

    /**
     * View method
     *
     * @param string|null $id States2 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $states2 = $this->States2->get($id, [
            'contain' => []
        ]);

        $this->set('states2', $states2);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $states2 = $this->States2->newEntity();
        if ($this->request->is('post')) {
            $states2 = $this->States2->patchEntity($states2, $this->request->getData());
            if ($this->States2->save($states2)) {
                $this->Flash->success(__('The states2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The states2 could not be saved. Please, try again.'));
        }
        $this->set(compact('states2'));
    }

    /**
     * Edit method
     *
     * @param string|null $id States2 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $states2 = $this->States2->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $states2 = $this->States2->patchEntity($states2, $this->request->getData());
            if ($this->States2->save($states2)) {
                $this->Flash->success(__('The states2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The states2 could not be saved. Please, try again.'));
        }
        $this->set(compact('states2'));
    }

    /**
     * Delete method
     *
     * @param string|null $id States2 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $states2 = $this->States2->get($id);
        if ($this->States2->delete($states2)) {
            $this->Flash->success(__('The states2 has been deleted.'));
        } else {
            $this->Flash->error(__('The states2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
