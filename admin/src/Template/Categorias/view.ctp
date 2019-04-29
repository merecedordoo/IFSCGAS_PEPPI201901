<h1><?= h($categoria->id) ?></h1>
<p><?= h($categoria->nome) ?></p>
<p><?= h($categoria->descricao) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $categoria->id]) ?></p>