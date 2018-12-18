<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fiabilidades Controller
 *
 * @property \App\Model\Table\FiabilidadesTable $Fiabilidades
 *
 * @method \App\Model\Entity\Fiabilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FiabilidadesController extends AppController
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
        $fiabilidades = $this->paginate($this->Fiabilidades);

        $this->set(compact('fiabilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Fiabilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fiabilidade = $this->Fiabilidades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('fiabilidade', $fiabilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fiabilidade = $this->Fiabilidades->newEntity();
        if ($this->request->is('post')) {
            $fiabilidade = $this->Fiabilidades->patchEntity($fiabilidade, $this->request->getData());
            if ($this->Fiabilidades->save($fiabilidade)) {
                $this->Flash->success(__('Fiabilidades correctamente registrado.'));

                return $this->redirect(['controller'=> 'usabilidades','action' => 'add']);
            }
            $this->Flash->error(__('Fiabilidades incorrectamente registrado, vuelva a intentarlo.'));
        }
        $empresas = $this->Fiabilidades->Empresas->find('all', ['limit' => 200]);
        $this->set(compact('fiabilidade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fiabilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fiabilidade = $this->Fiabilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fiabilidade = $this->Fiabilidades->patchEntity($fiabilidade, $this->request->getData());
            if ($this->Fiabilidades->save($fiabilidade)) {
                $this->Flash->success(__('The fiabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fiabilidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Fiabilidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('fiabilidade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fiabilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fiabilidade = $this->Fiabilidades->get($id);
        if ($this->Fiabilidades->delete($fiabilidade)) {
            $this->Flash->success(__('The fiabilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The fiabilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
