<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Platillos Controller
 *
 * @property \App\Model\Table\PlatillosTable $Platillos
 *
 * @method \App\Model\Entity\Platillo[] paginate($object = null, array $settings = [])
 */
class PlatillosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CategoriaPlatillos']
        ];
        $platillos = $this->paginate($this->Platillos);

        $this->set(compact('platillos'));
        $this->set('_serialize', ['platillos']);
    }

    /**
     * View method
     *
     * @param string|null $id Platillo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $platillo = $this->Platillos->get($id, [
            'contain' => ['CategoriaPlatillos', 'Cocineros']
        ]);

        $this->set('platillo', $platillo);
        $this->set('_serialize', ['platillo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $platillo = $this->Platillos->newEntity();
        if ($this->request->is('post')) {
            $platillo = $this->Platillos->patchEntity($platillo, $this->request->getData());
            if ($this->Platillos->save($platillo)) {
                $this->Flash->success(__('The platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The platillo could not be saved. Please, try again.'));
        }
        $categoriaPlatillos = $this->Platillos->CategoriaPlatillos->find('list', ['limit' => 200]);
        $cocineros = $this->Platillos->Cocineros->find('list', ['limit' => 200]);
        $this->set(compact('platillo', 'categoriaPlatillos', 'cocineros'));
        $this->set('_serialize', ['platillo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Platillo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $platillo = $this->Platillos->get($id, [
            'contain' => ['Cocineros']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $platillo = $this->Platillos->patchEntity($platillo, $this->request->getData());
            if ($this->Platillos->save($platillo)) {
                $this->Flash->success(__('The platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The platillo could not be saved. Please, try again.'));
        }
        $categoriaPlatillos = $this->Platillos->CategoriaPlatillos->find('list', ['limit' => 200]);
        $cocineros = $this->Platillos->Cocineros->find('list', ['limit' => 200]);
        $this->set(compact('platillo', 'categoriaPlatillos', 'cocineros'));
        $this->set('_serialize', ['platillo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Platillo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $platillo = $this->Platillos->get($id);
        if ($this->Platillos->delete($platillo)) {
            $this->Flash->success(__('The platillo has been deleted.'));
        } else {
            $this->Flash->error(__('The platillo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
