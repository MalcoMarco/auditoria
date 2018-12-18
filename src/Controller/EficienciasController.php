<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Eficiencias Controller
 *
 * @property \App\Model\Table\EficienciasTable $Eficiencias
 *
 * @method \App\Model\Entity\Eficiencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EficienciasController extends AppController
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
        $eficiencias = $this->paginate($this->Eficiencias);

        $this->set(compact('eficiencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Eficiencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eficiencia = $this->Eficiencias->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('eficiencia', $eficiencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eficiencia = $this->Eficiencias->newEntity();
        if ($this->request->is('post')) {
            $eficiencia = $this->Eficiencias->patchEntity($eficiencia, $this->request->getData());
            if ($this->Eficiencias->save($eficiencia)) {
                $this->Flash->success(__('Eficiencias correctamente registrado.'));

                return $this->redirect(['controller'=> 'funcionalidades','action' => 'add']);
            }
            $this->Flash->error(__('Eficiencias incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Eficiencias->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('eficiencia', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Eficiencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eficiencia = $this->Eficiencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eficiencia = $this->Eficiencias->patchEntity($eficiencia, $this->request->getData());
            if ($this->Eficiencias->save($eficiencia)) {
                $this->Flash->success(__('The eficiencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The eficiencia could not be saved. Please, try again.'));
        }
        $empresas = $this->Eficiencias->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('eficiencia', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Eficiencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eficiencia = $this->Eficiencias->get($id);
        if ($this->Eficiencias->delete($eficiencia)) {
            $this->Flash->success(__('The eficiencia has been deleted.'));
        } else {
            $this->Flash->error(__('The eficiencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
