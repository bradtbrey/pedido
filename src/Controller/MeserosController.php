<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Meseros Controller
 *
 * @property \App\Model\Table\MeserosTable $Meseros
 *
 * @method \App\Model\Entity\Mesero[] paginate($object = null, array $settings = [])
 */
class MeserosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $meseros = $this->paginate($this->Meseros);

        $this->set(compact('meseros'));
        $this->set('_serialize', ['meseros']);
    }

    /**
     * View method
     *
     * @param string|null $id Mesero id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mesero = $this->Meseros->get($id, [
            'contain' => []
        ]);

        $this->set('mesero', $mesero);
        $this->set('_serialize', ['mesero']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mesero = $this->Meseros->newEntity();
        if ($this->request->is('post')) {
            $mesero = $this->Meseros->patchEntity($mesero, $this->request->getData());
            if ($this->Meseros->save($mesero)) {
                $this->Flash->success(__('The mesero has been saved.'));
                /*$this->Session->setFlash('El mesero ha sido creado', 'default', ['class' => 'success']);*/

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesero could not be saved. Please, try again.'));
        }
        $this->set(compact('mesero'));
        $this->set('_serialize', ['mesero']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mesero id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mesero = $this->Meseros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesero = $this->Meseros->patchEntity($mesero, $this->request->getData());
            if ($this->Meseros->save($mesero)) {
                $this->Flash->success(__('The mesero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesero could not be saved. Please, try again.'));
        }
        $this->set(compact('mesero'));
        $this->set('_serialize', ['mesero']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mesero id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesero = $this->Meseros->get($id);
        if ($this->Meseros->delete($mesero)) {
            $this->Flash->success(__('The mesero has been deleted.'));
        } else {
            $this->Flash->error(__('The mesero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
