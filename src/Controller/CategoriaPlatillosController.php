<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriaPlatillos Controller
 *
 * @property \App\Model\Table\CategoriaPlatillosTable $CategoriaPlatillos
 *
 * @method \App\Model\Entity\CategoriaPlatillo[] paginate($object = null, array $settings = [])
 */
class CategoriaPlatillosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $categoriaPlatillos = $this->paginate($this->CategoriaPlatillos);

        $this->set(compact('categoriaPlatillos'));
        $this->set('_serialize', ['categoriaPlatillos']);
    }

    /**
     * View method
     *
     * @param string|null $id Categoria Platillo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriaPlatillo = $this->CategoriaPlatillos->get($id, [
            'contain' => ['Platillos']
        ]);

        $this->set('categoriaPlatillo', $categoriaPlatillo);
        $this->set('_serialize', ['categoriaPlatillo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriaPlatillo = $this->CategoriaPlatillos->newEntity();
        if ($this->request->is('post')) {
            $categoriaPlatillo = $this->CategoriaPlatillos->patchEntity($categoriaPlatillo, $this->request->getData());
            if ($this->CategoriaPlatillos->save($categoriaPlatillo)) {
                $this->Flash->success(__('The categoria platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoria platillo could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriaPlatillo'));
        $this->set('_serialize', ['categoriaPlatillo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoria Platillo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriaPlatillo = $this->CategoriaPlatillos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriaPlatillo = $this->CategoriaPlatillos->patchEntity($categoriaPlatillo, $this->request->getData());
            if ($this->CategoriaPlatillos->save($categoriaPlatillo)) {
                $this->Flash->success(__('The categoria platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoria platillo could not be saved. Please, try again.'));
        }
        $this->set(compact('categoriaPlatillo'));
        $this->set('_serialize', ['categoriaPlatillo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoria Platillo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriaPlatillo = $this->CategoriaPlatillos->get($id);
        if ($this->CategoriaPlatillos->delete($categoriaPlatillo)) {
            $this->Flash->success(__('The categoria platillo has been deleted.'));
        } else {
            $this->Flash->error(__('The categoria platillo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
