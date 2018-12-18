<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usabilidades Controller
 *
 * @property \App\Model\Table\UsabilidadesTable $Usabilidades
 *
 * @method \App\Model\Entity\Usabilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsabilidadesController extends AppController
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
        $usabilidades = $this->paginate($this->Usabilidades);

        $this->set(compact('usabilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Usabilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usabilidade = $this->Usabilidades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('usabilidade', $usabilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usabilidade = $this->Usabilidades->newEntity();
        if ($this->request->is('post')) {
            $usabilidade = $this->Usabilidades->patchEntity($usabilidade, $this->request->getData());
            if ($this->Usabilidades->save($usabilidade)) {
                $this->Flash->success(__('Usabilidades correctamente registrado.'));

                return $this->redirect(['controller'=> 'empresas','action' => 'index']);
            }
            $this->Flash->error(__('Usabilidades incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Usabilidades->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('usabilidade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usabilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usabilidade = $this->Usabilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usabilidade = $this->Usabilidades->patchEntity($usabilidade, $this->request->getData());
            if ($this->Usabilidades->save($usabilidade)) {
                $this->Flash->success(__('The usabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usabilidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Usabilidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('usabilidade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usabilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usabilidade = $this->Usabilidades->get($id);
        if ($this->Usabilidades->delete($usabilidade)) {
            $this->Flash->success(__('The usabilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The usabilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
