<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Compatitibilidades Controller
 *
 * @property \App\Model\Table\CompatitibilidadesTable $Compatitibilidades
 *
 * @method \App\Model\Entity\Compatitibilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompatitibilidadesController extends AppController
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
        $compatitibilidades = $this->paginate($this->Compatitibilidades);

        $this->set(compact('compatitibilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Compatitibilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compatitibilidade = $this->Compatitibilidades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('compatitibilidade', $compatitibilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compatitibilidade = $this->Compatitibilidades->newEntity();
        if ($this->request->is('post')) {
            $compatitibilidade = $this->Compatitibilidades->patchEntity($compatitibilidade, $this->request->getData());
            if ($this->Compatitibilidades->save($compatitibilidade)) {
                $this->Flash->success(__('Compatitibilidades correctamente registrado.'));

                return $this->redirect(['controller'=> 'seguridades','action' => 'add']);
            }
            $this->Flash->error(__('Compatitibilidades incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Compatitibilidades->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('compatitibilidade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compatitibilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compatitibilidade = $this->Compatitibilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compatitibilidade = $this->Compatitibilidades->patchEntity($compatitibilidade, $this->request->getData());
            if ($this->Compatitibilidades->save($compatitibilidade)) {
                $this->Flash->success(__('The compatitibilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compatitibilidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Compatitibilidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('compatitibilidade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compatitibilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compatitibilidade = $this->Compatitibilidades->get($id);
        if ($this->Compatitibilidades->delete($compatitibilidade)) {
            $this->Flash->success(__('The compatitibilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The compatitibilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
