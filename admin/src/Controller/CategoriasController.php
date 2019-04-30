<?php
namespace App\Controller;

class CategoriasController extends AppController
{
	public function index()
	{
		$this->loadComponent('Paginator');
		$categorias = $this->Paginator->paginate($this->Categorias->find());
		$this->set(compact('categorias'));
	}

	public function view($id = null)
	{
		$categoria = $this->Categorias->findById($id)->firstOrFail();
		$this->set(compact('categoria'));
	}

	public function add()
	{
		$categoria = $this->Categorias->newEntity();
		if ($this->request->is(['post'])) {
			$this->Categorias->patchEntity($categoria, $this->request->getData());
			if ($this->Categorias->save($categoria)) {
				$this->Flash->success(__('Categoria adicionada.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não foi possível adicionar.'));
		}
		$this->set('categoria', $categoria);
	}

	public function edit($id = null)
	{
		$categoria = $this->Categorias->findById($id)->firstOrFail();
		if ($this->request->is(['post', 'put'])) {
			$this->Categorias->patchEntity($categoria, $this->request->getData());
			if ($this->Categorias->save($categoria)) {
				$this->Flash->success(__('Categoria atualizada.'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não foi possível atualizar.'));
		}
		$this->set('categoria', $categoria);
	}

	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);
		$categoria = $this->Categorias->findById($id)->firstOrFail();
		if ($this->Categorias->delete($categoria)) {
			$this->Flash->success(__('A categoria {0} foi excluída.', $categoria->nome));
			return $this->redirect(['action' => 'index']);
		}
	}
}
?>