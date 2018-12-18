<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Portabilidades Controller
 *
 * @property \App\Model\Table\PortabilidadesTable $Portabilidades
 *
 * @method \App\Model\Entity\Portabilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PortabilidadesController extends AppController
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
        $portabilidades = $this->paginate($this->Portabilidades);

        $this->set(compact('portabilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Portabilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $portabilidade = $this->Portabilidades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('portabilidade', $portabilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $portabilidade = $this->Portabilidades->newEntity();
        if ($this->request->is('post')) {
            $portabilidade = $this->Portabilidades->patchEntity($portabilidade, $this->request->getData());
            if ($this->Portabilidades->save($portabilidade)) {
                $this->Flash->success(__('Portabilidades correctamente registrado.'));

                return $this->redirect(['controller' => 'mantenibilidades','action' => 'add']);
            }
            $this->Flash->error(__('Portabilidades incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Portabilidades->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('portabilidade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Portabilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $portabilidade = $this->Portabilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $portabilidade = $this->Portabilidades->patchEntity($portabilidade, $this->request->getData());
            if ($this->Portabilidades->save($portabilidade)) {
                $this->Flash->success(__('The portabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The portabilidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Portabilidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('portabilidade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Portabilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $portabilidade = $this->Portabilidades->get($id);
        if ($this->Portabilidades->delete($portabilidade)) {
            $this->Flash->success(__('The portabilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The portabilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
