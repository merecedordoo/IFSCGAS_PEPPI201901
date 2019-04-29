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
}
?>