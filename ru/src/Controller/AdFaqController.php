<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdFaq Controller
 *
 * @property \App\Model\Table\AdFaqTable $AdFaq
 *
 * @method \App\Model\Entity\AdFaq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdFaqController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adFaq = $this->paginate($this->AdFaq);

        $this->set(compact('adFaq'));
    }

    /**
     * View method
     *
     * @param string|null $id Ad Faq id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adFaq = $this->AdFaq->get($id, [
            'contain' => []
        ]);

        $this->set('adFaq', $adFaq);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adFaq = $this->AdFaq->newEntity();
        if ($this->request->is('post')) {
            $adFaq = $this->AdFaq->patchEntity($adFaq, $this->request->getData());
            if ($this->AdFaq->save($adFaq)) {
                $this->Flash->success(__('The ad faq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad faq could not be saved. Please, try again.'));
        }
        $this->set(compact('adFaq'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad Faq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adFaq = $this->AdFaq->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adFaq = $this->AdFaq->patchEntity($adFaq, $this->request->getData());
            if ($this->AdFaq->save($adFaq)) {
                $this->Flash->success(__('The ad faq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad faq could not be saved. Please, try again.'));
        }
        $this->set(compact('adFaq'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad Faq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adFaq = $this->AdFaq->get($id);
        if ($this->AdFaq->delete($adFaq)) {
            $this->Flash->success(__('The ad faq has been deleted.'));
        } else {
            $this->Flash->error(__('The ad faq could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
