<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdSlider1 Controller
 *
 * @property \App\Model\Table\AdSlider1Table $AdSlider1
 *
 * @method \App\Model\Entity\AdSlider1[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdSlider1Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adSlider1 = $this->paginate($this->AdSlider1);

        $this->set(compact('adSlider1'));
    }

    /**
     * View method
     *
     * @param string|null $id Ad Slider1 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adSlider1 = $this->AdSlider1->get($id, [
            'contain' => []
        ]);

        $this->set('adSlider1', $adSlider1);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adSlider1 = $this->AdSlider1->newEntity();
        if ($this->request->is('post')) {
            $adSlider1 = $this->AdSlider1->patchEntity($adSlider1, $this->request->getData());
         
            $img = $this->upload_img_file($this->request->data['file'],"../../uploads/slides1/"); 
            $adSlider1->img = $img;

           
            if ($this->AdSlider1->save($adSlider1)) {
                $this->Flash->success(__('The ad slider1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad slider1 could not be saved. Please, try again.'));
        }
        $this->set(compact('adSlider1'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad Slider1 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adSlider1 = $this->AdSlider1->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $adSlider1 = $this->AdSlider1->patchEntity($adSlider1, $this->request->getData());

            if($this->request->data['file']['tmp_name']<>"") {         
                if(file_exists($this->request->data['img'])){
                    unlink($this->request->data['img']);
                }

                $img = $this->upload_img_file($this->request->data['file'],"../../uploads/slides1/"); 
                $adSlider1->img = $img;

            }


            if ($this->AdSlider1->save($adSlider1)) {
                $this->Flash->success(__('The ad slider1 has been saved.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The ad slider1 could not be saved. Please, try again.'));
        }
        
        $this->set(compact('adSlider1'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad Slider1 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adSlider1 = $this->AdSlider1->get($id);
        if ($this->AdSlider1->delete($adSlider1)) {

            if(file_exists($adSlider1->img)) {
                unlink($adSlider1->img);
            }

            $this->Flash->success(__('The ad slider1 has been deleted.'));
        } else {
            $this->Flash->error(__('The ad slider1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
