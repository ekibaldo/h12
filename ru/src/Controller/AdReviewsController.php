<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdReviews Controller
 *
 * @property \App\Model\Table\AdReviewsTable $AdReviews
 *
 * @method \App\Model\Entity\AdReview[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdReviewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adReviews = $this->paginate($this->AdReviews);

        $this->set(compact('adReviews'));
    }

    /**
     * View method
     *
     * @param string|null $id Ad Review id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adReview = $this->AdReviews->get($id, [
            'contain' => []
        ]);

        $this->set('adReview', $adReview);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adReview = $this->AdReviews->newEntity();
        if ($this->request->is('post')) {
            $adReview = $this->AdReviews->patchEntity($adReview, $this->request->getData());
            if ($this->AdReviews->save($adReview)) {
                $this->Flash->success(__('The ad review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad review could not be saved. Please, try again.'));
        }
        $this->set(compact('adReview'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad Review id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adReview = $this->AdReviews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adReview = $this->AdReviews->patchEntity($adReview, $this->request->getData());
            if ($this->AdReviews->save($adReview)) {
                $this->Flash->success(__('The ad review has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad review could not be saved. Please, try again.'));
        }
        $this->set(compact('adReview'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad Review id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adReview = $this->AdReviews->get($id);
        if ($this->AdReviews->delete($adReview)) {
            $this->Flash->success(__('The ad review has been deleted.'));
        } else {
            $this->Flash->error(__('The ad review could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
