<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servs Controller
 *
 * @property \App\Model\Table\ServsTable $Servs
 *
 * @method \App\Model\Entity\Serv[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        error_reporting(0);    

        $this->paginate = [
            'contain' => ['States']
        ];

        $search = $this->request->query['search'];

        if($search==""){
            $servs = $this->paginate($this->Servs);
        }else{
            $servs = $this->Servs->find()->where(['name LIKE'=>'%'.$search.'%']);   
        }

        $this->set(compact('servs'));
    }

    /**
     * View method
     *
     * @param string|null $id Serv id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serv = $this->Servs->get($id, [
            'contain' => ['States']
        ]);

        $this->set('serv', $serv);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serv = $this->Servs->newEntity();
        if ($this->request->is('post')) {
            $serv = $this->Servs->patchEntity($serv, $this->request->getData());
            if ($this->Servs->save($serv)) {
                $this->Flash->success(__('The serv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serv could not be saved. Please, try again.'));
        }
        $states = $this->Servs->States->find('list', ['limit' => 200]);
        $this->set(compact('serv', 'states'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Serv id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serv = $this->Servs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serv = $this->Servs->patchEntity($serv, $this->request->getData());
            if ($this->Servs->save($serv)) {
                $this->Flash->success(__('The serv has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The serv could not be saved. Please, try again.'));
        }
        $states = $this->Servs->States->find('list', ['limit' => 200]);
        $this->set(compact('serv', 'states'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Serv id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serv = $this->Servs->get($id);
        if ($this->Servs->delete($serv)) {
            $this->Flash->success(__('The serv has been deleted.'));
        } else {
            $this->Flash->error(__('The serv could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
