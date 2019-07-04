<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdSlider3 Controller
 *
 * @property \App\Model\Table\AdSlider3Table $AdSlider3
 *
 * @method \App\Model\Entity\AdSlider3[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdSlider3Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adSlider3 = $this->paginate($this->AdSlider3);

        $this->set(compact('adSlider3'));
    }

    /**
     * View method
     *
     * @param string|null $id Ad Slider3 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adSlider3 = $this->AdSlider3->get($id, [
            'contain' => []
        ]);

        $this->set('adSlider3', $adSlider3);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adSlider3 = $this->AdSlider3->newEntity();
        if ($this->request->is('post')) {
            $adSlider3 = $this->AdSlider3->patchEntity($adSlider3, $this->request->getData());
         
            $img = $this->upload_img_file($this->request->data['file'],"../../uploads/slides3/");       
            $adSlider3->img = $img;

           
            if ($this->AdSlider3->save($adSlider3)) {
                $this->Flash->success(__('The ad slider3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad slider3 could not be saved. Please, try again.'));
        }
        $this->set(compact('adSlider3'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad Slider3 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adSlider3 = $this->AdSlider3->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adSlider3 = $this->AdSlider3->patchEntity($adSlider3, $this->request->getData());

            if($this->request->data['file']['tmp_name']<>"") {         
                if(file_exists($this->request->data['img'])){
                    unlink($this->request->data['img']);
                }

        
                $img = $this->upload_img_file($this->request->data['file'],"../../uploads/slides3/");
                $adSlider3->img = $img;
            }


            if ($this->AdSlider3->save($adSlider3)) {
                $this->Flash->success(__('The ad slider3 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad slider3 could not be saved. Please, try again.'));
        }
        $this->set(compact('adSlider3'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad Slider3 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adSlider3 = $this->AdSlider3->get($id);
        if ($this->AdSlider3->delete($adSlider3)) {

            if(file_exists($adSlider3->img)) {
                unlink($adSlider3->img);
            }

            $this->Flash->success(__('The ad slider3 has been deleted.'));
        } else {
            $this->Flash->error(__('The ad slider3 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
