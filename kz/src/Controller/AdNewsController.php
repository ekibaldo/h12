<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdNews Controller
 *
 * @property \App\Model\Table\AdNewsTable $AdNews
 *
 * @method \App\Model\Entity\AdNews[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdNewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adNews = $this->paginate($this->AdNews);

        $this->set(compact('adNews'));
    }

    /**
     * View method
     *
     * @param string|null $id Ad News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adNews = $this->AdNews->get($id, [
            'contain' => []
        ]);

        $this->set('adNews', $adNews);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adNews = $this->AdNews->newEntity();
        if ($this->request->is('post')) {
            $adNews = $this->AdNews->patchEntity($adNews, $this->request->getData());

            $img = $this->upload_img_file($this->request->data['file'],"../../uploads/news/"); 
            $adNews->img = $img;

            if ($this->AdNews->save($adNews)) {
                $this->Flash->success(__('The ad news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad news could not be saved. Please, try again.'));
        }
        $this->set(compact('adNews'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adNews = $this->AdNews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adNews = $this->AdNews->patchEntity($adNews, $this->request->getData());

            if($this->request->data['file']['tmp_name']<>"") {         
                if(file_exists($this->request->data['img'])){
                    unlink($this->request->data['img']);
                }

                $img = $this->upload_img_file($this->request->data['file'],"../../uploads/news/");
                $adNews->img = $img;
            }


            if ($this->AdNews->save($adNews)) {
                $this->Flash->success(__('The ad news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad news could not be saved. Please, try again.'));
        }
        $this->set(compact('adNews'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adNews = $this->AdNews->get($id);
        if ($this->AdNews->delete($adNews)) {

            if(file_exists($adNews->img)) {
                unlink($adNews->img);
            }

            $this->Flash->success(__('The ad news has been deleted.'));
        } else {
            $this->Flash->error(__('The ad news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
