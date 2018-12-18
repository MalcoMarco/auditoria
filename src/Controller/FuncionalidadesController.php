<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Funcionalidades Controller
 *
 * @property \App\Model\Table\FuncionalidadesTable $Funcionalidades
 *
 * @method \App\Model\Entity\Funcionalidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncionalidadesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas']
        ];
        $funcionalidades = $this->paginate($this->Funcionalidades);

        $this->set(compact('funcionalidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Funcionalidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionalidade = $this->Funcionalidades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('funcionalidade', $funcionalidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionalidade = $this->Funcionalidades->newEntity();
        if ($this->request->is('post')) {
            $funcionalidade = $this->Funcionalidades->patchEntity($funcionalidade, $this->request->getData());
            if ($this->Funcionalidades->save($funcionalidade)) {
                $this->Flash->success(__('Funcionalidades correctamente registrado.'));

                return $this->redirect(['controller'=> 'fiabilidades','action' => 'add']);
            }
            $this->Flash->error(__('Funcionalidades incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Funcionalidades->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('funcionalidade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionalidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionalidade = $this->Funcionalidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionalidade = $this->Funcionalidades->patchEntity($funcionalidade, $this->request->getData());
            if ($this->Funcionalidades->save($funcionalidade)) {
                $this->Flash->success(__('The funcionalidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionalidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Funcionalidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('funcionalidade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionalidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionalidade = $this->Funcionalidades->get($id);
        if ($this->Funcionalidades->delete($funcionalidade)) {
            $this->Flash->success(__('The funcionalidade has been deleted.'));
        } else {
            $this->Flash->error(__('The funcionalidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
