<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Seguridades Controller
 *
 * @property \App\Model\Table\SeguridadesTable $Seguridades
 *
 * @method \App\Model\Entity\Seguridade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeguridadesController extends AppController
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
        $seguridades = $this->paginate($this->Seguridades);

        $this->set(compact('seguridades'));
    }

    /**
     * View method
     *
     * @param string|null $id Seguridade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seguridade = $this->Seguridades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('seguridade', $seguridade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seguridade = $this->Seguridades->newEntity();
        if ($this->request->is('post')) {
            $seguridade = $this->Seguridades->patchEntity($seguridade, $this->request->getData());
            if ($this->Seguridades->save($seguridade)) {
                $this->Flash->success(__('Seguridades correctamente registrado.'));

                return $this->redirect(['controller'=>'eficiencias','action' => 'add']);
            }
            $this->Flash->error(__('Seguridades incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Seguridades->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('seguridade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Seguridade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seguridade = $this->Seguridades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seguridade = $this->Seguridades->patchEntity($seguridade, $this->request->getData());
            if ($this->Seguridades->save($seguridade)) {
                $this->Flash->success(__('The seguridade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seguridade could not be saved. Please, try again.'));
        }
        $empresas = $this->Seguridades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('seguridade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Seguridade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seguridade = $this->Seguridades->get($id);
        if ($this->Seguridades->delete($seguridade)) {
            $this->Flash->success(__('The seguridade has been deleted.'));
        } else {
            $this->Flash->error(__('The seguridade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
