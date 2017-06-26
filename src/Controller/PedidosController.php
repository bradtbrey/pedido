<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Pedidos Controller
 *
 * @property \App\Model\Table\PedidosTable $Pedidos
 *
 * @method \App\Model\Entity\Pedido[] paginate($object = null, array $settings = [])
 */
class PedidosController extends AppController
{

    public function  initialize () 
    { 
        parent::initialize(); 
        $this->loadComponent('RequestHandler'); 
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Platillos']
        ];
        $pedidos = $this->paginate($this->Pedidos);

        $this->set(compact('pedidos'));
        $this->set('_serialize', ['pedidos']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => ['Platillos']
        ]);

        $this->set('pedido', $pedido);
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

             /*$platillos = TableRegistry::get('Platillos');
            $query = $platillos->find();
            debug($query);*/
        
           if($this->request->is('ajax'))
        {
            $id = $this->request->data['id'];
            $cantidad = $this->request->data['cantidad'];
            
            $platillo = $this->Pedidos->Platillos->find('all', array('fields' => array('Platillo.precio'), 'conditions' => array('Platillo.id' => $id)));
            
            $precio = $platillo[0]['Platillo']['precio'];
            
            $subtotal = $cantidad * $precio;
            
            $pedido = array( 'platillo_id' => $id, 'cantidad' => $cantidad, 'subtotal' => $subtotal );
            
            
                $this->Pedido->save($pedido);
            
        
        }
        
        $this->autoRender = false;        
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedido = $this->Pedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedidos->patchEntity($pedido, $this->request->getData());
            if ($this->Pedidos->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
        }
        $platillos = $this->Pedidos->Platillos->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'platillos'));
        $this->set('_serialize', ['pedido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedidos->get($id);
        if ($this->Pedidos->delete($pedido)) {
            $this->Flash->success(__('The pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The pedido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
