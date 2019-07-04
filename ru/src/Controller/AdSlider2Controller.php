<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdSlider2 Controller
 *
 * @property \App\Model\Table\AdSlider2Table $AdSlider2
 *
 * @method \App\Model\Entity\AdSlider2[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdSlider2Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $adSlider2 = $this->paginate($this->AdSlider2);

        $this->set(compact('adSlider2'));
    }

    /**
     * View method
     *
     * @param string|null $id Ad Slider2 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adSlider2 = $this->AdSlider2->get($id, [
            'contain' => []
        ]);

        $this->set('adSlider2', $adSlider2);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adSlider2 = $this->AdSlider2->newEntity();
        if ($this->request->is('post')) {
            $adSlider2 = $this->AdSlider2->patchEntity($adSlider2, $this->request->getData());
         
            $img = $this->upload_img_file($this->request->data['file'],"../../uploads/slides2/");       
            $adSlider2->img = $img;

           
            if ($this->AdSlider2->save($adSlider2)) {
                $this->Flash->success(__('The ad slider2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad slider2 could not be saved. Please, try again.'));
        }
        $this->set(compact('adSlider2'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ad Slider2 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adSlider2 = $this->AdSlider2->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adSlider2 = $this->AdSlider2->patchEntity($adSlider2, $this->request->getData());

            if($this->request->data['file']['tmp_name']<>"") {         
                if(file_exists($this->request->data['img'])){
                    unlink($this->request->data['img']);
                }

                $img = $this->upload_img_file($this->request->data['file'],"../../uploads/slides2/");
                $adSlider2->img = $img;
            }


            if ($this->AdSlider2->save($adSlider2)) {
                $this->Flash->success(__('The ad slider2 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ad slider2 could not be saved. Please, try again.'));
        }
        $this->set(compact('adSlider2'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ad Slider2 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adSlider2 = $this->AdSlider2->get($id);
        if ($this->AdSlider2->delete($adSlider2)) {

            if(file_exists($adSlider2->img)) {
                unlink($adSlider2->img);
            }

            $this->Flash->success(__('The ad slider2 has been deleted.'));
        } else {
            $this->Flash->error(__('The ad slider2 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
