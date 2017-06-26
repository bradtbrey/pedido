<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CocinerosPlatillos Controller
 *
 * @property \App\Model\Table\CocinerosPlatillosTable $CocinerosPlatillos
 *
 * @method \App\Model\Entity\CocinerosPlatillo[] paginate($object = null, array $settings = [])
 */
class CocinerosPlatillosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cocineros', 'Platillos']
        ];
        $cocinerosPlatillos = $this->paginate($this->CocinerosPlatillos);

        $this->set(compact('cocinerosPlatillos'));
        $this->set('_serialize', ['cocinerosPlatillos']);
    }

    /**
     * View method
     *
     * @param string|null $id Cocineros Platillo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cocinerosPlatillo = $this->CocinerosPlatillos->get($id, [
            'contain' => ['Cocineros', 'Platillos']
        ]);

        $this->set('cocinerosPlatillo', $cocinerosPlatillo);
        $this->set('_serialize', ['cocinerosPlatillo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cocinerosPlatillo = $this->CocinerosPlatillos->newEntity();
        if ($this->request->is('post')) {
            $cocinerosPlatillo = $this->CocinerosPlatillos->patchEntity($cocinerosPlatillo, $this->request->getData());
            if ($this->CocinerosPlatillos->save($cocinerosPlatillo)) {
                $this->Flash->success(__('The cocineros platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cocineros platillo could not be saved. Please, try again.'));
        }
        $cocineros = $this->CocinerosPlatillos->Cocineros->find('list', ['limit' => 200]);
        $platillos = $this->CocinerosPlatillos->Platillos->find('list', ['limit' => 200]);
        $this->set(compact('cocinerosPlatillo', 'cocineros', 'platillos'));
        $this->set('_serialize', ['cocinerosPlatillo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cocineros Platillo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cocinerosPlatillo = $this->CocinerosPlatillos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cocinerosPlatillo = $this->CocinerosPlatillos->patchEntity($cocinerosPlatillo, $this->request->getData());
            if ($this->CocinerosPlatillos->save($cocinerosPlatillo)) {
                $this->Flash->success(__('The cocineros platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cocineros platillo could not be saved. Please, try again.'));
        }
        $cocineros = $this->CocinerosPlatillos->Cocineros->find('list', ['limit' => 200]);
        $platillos = $this->CocinerosPlatillos->Platillos->find('list', ['limit' => 200]);
        $this->set(compact('cocinerosPlatillo', 'cocineros', 'platillos'));
        $this->set('_serialize', ['cocinerosPlatillo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cocineros Platillo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cocinerosPlatillo = $this->CocinerosPlatillos->get($id);
        if ($this->CocinerosPlatillos->delete($cocinerosPlatillo)) {
            $this->Flash->success(__('The cocineros platillo has been deleted.'));
        } else {
            $this->Flash->error(__('The cocineros platillo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
