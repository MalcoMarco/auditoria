<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mantenibilidades Controller
 *
 * @property \App\Model\Table\MantenibilidadesTable $Mantenibilidades
 *
 * @method \App\Model\Entity\Mantenibilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MantenibilidadesController extends AppController
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
        $mantenibilidades = $this->paginate($this->Mantenibilidades);

        $this->set(compact('mantenibilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Mantenibilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mantenibilidade = $this->Mantenibilidades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('mantenibilidade', $mantenibilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mantenibilidade = $this->Mantenibilidades->newEntity();
        if ($this->request->is('post')) {
            $mantenibilidade = $this->Mantenibilidades->patchEntity($mantenibilidade, $this->request->getData());
            if ($this->Mantenibilidades->save($mantenibilidade)) {
                $this->Flash->success(__('Mantenibilidades correctamente registrado.'));

                return $this->redirect(['controller'=> 'compatitibilidades','action' => 'add']);
            }
            $this->Flash->error(__('Mantenibilidades incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Mantenibilidades->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('mantenibilidade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mantenibilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mantenibilidade = $this->Mantenibilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mantenibilidade = $this->Mantenibilidades->patchEntity($mantenibilidade, $this->request->getData());
            if ($this->Mantenibilidades->save($mantenibilidade)) {
                $this->Flash->success(__('The mantenibilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mantenibilidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Mantenibilidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('mantenibilidade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mantenibilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mantenibilidade = $this->Mantenibilidades->get($id);
        if ($this->Mantenibilidades->delete($mantenibilidade)) {
            $this->Flash->success(__('The mantenibilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The mantenibilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
