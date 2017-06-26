<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cocineros Controller
 *
 * @property \App\Model\Table\CocinerosTable $Cocineros
 *
 * @method \App\Model\Entity\Cocinero[] paginate($object = null, array $settings = [])
 */
class CocinerosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cocineros = $this->paginate($this->Cocineros);

        $this->set(compact('cocineros'));
        $this->set('_serialize', ['cocineros']);
    }

    /**
     * View method
     *
     * @param string|null $id Cocinero id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cocinero = $this->Cocineros->get($id, [
            'contain' => ['Platillos']
        ]);

        $this->set('cocinero', $cocinero);
        $this->set('_serialize', ['cocinero']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cocinero = $this->Cocineros->newEntity();
        if ($this->request->is('post')) {
            $cocinero = $this->Cocineros->patchEntity($cocinero, $this->request->getData());
            if ($this->Cocineros->save($cocinero)) {
                $this->Flash->success('The cocinero has been saved.','default',['class' => 'alert alert-success']);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cocinero could not be saved. Please, try again.'));
        }
        $platillos = $this->Cocineros->Platillos->find('list', ['limit' => 200]);
        $this->set(compact('cocinero', 'platillos'));
        $this->set('_serialize', ['cocinero']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cocinero id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cocinero = $this->Cocineros->get($id, [
            'contain' => ['Platillos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cocinero = $this->Cocineros->patchEntity($cocinero, $this->request->getData());
            if ($this->Cocineros->save($cocinero)) {
                $this->Flash->success(__('The cocinero has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cocinero could not be saved. Please, try again.'));
        }
        $platillos = $this->Cocineros->Platillos->find('list', ['limit' => 200]);
        $this->set(compact('cocinero', 'platillos'));
        $this->set('_serialize', ['cocinero']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cocinero id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cocinero = $this->Cocineros->get($id);
        if ($this->Cocineros->delete($cocinero)) {
            $this->Flash->success(__('The cocinero has been deleted.'));
        } else {
            $this->Flash->error(__('The cocinero could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
