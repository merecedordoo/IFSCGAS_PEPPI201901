<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paginas Controller
 *
 * @property \App\Model\Table\PaginasTable $Paginas
 *
 * @method \App\Model\Entity\Pagina[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaginasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $paginas = $this->paginate($this->Paginas);

        $this->set(compact('paginas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pagina = $this->Paginas->get($id, [
            'contain' => []
        ]);

        $this->set('pagina', $pagina);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pagina = $this->Paginas->newEntity();
        if ($this->request->is('post')) {
            $pagina = $this->Paginas->patchEntity($pagina, $this->request->getData());
            if ($this->Paginas->save($pagina)) {
                $this->Flash->success(__('The pagina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagina could not be saved. Please, try again.'));
        }
        $this->set(compact('pagina'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pagina = $this->Paginas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pagina = $this->Paginas->patchEntity($pagina, $this->request->getData());
            if ($this->Paginas->save($pagina)) {
                $this->Flash->success(__('The pagina has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pagina could not be saved. Please, try again.'));
        }
        $this->set(compact('pagina'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pagina id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pagina = $this->Paginas->get($id);
        if ($this->Paginas->delete($pagina)) {
            $this->Flash->success(__('The pagina has been deleted.'));
        } else {
            $this->Flash->error(__('The pagina could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
