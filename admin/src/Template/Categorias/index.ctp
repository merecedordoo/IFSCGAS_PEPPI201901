<h1>Categorias</h1>
<?= $this->Html->link('Novo', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
		<th>Ações</th>
    </tr>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td>
            <?= $this->Html->link($categoria->nome, ['action' => 'view', $categoria->id]) ?>
        </td>
        <td>
            <?= $categoria->descricao ?>
        </td>
		<td>
			<?= $this->Html->link('Edit', ['action' => 'edit', $categoria->id]) ?>
			<?= $this->Form->postLink(
				'Delete',
				['action' => 'delete', $categoria->id],
				['confirm' => 'Tu tem certeza?'])
			?>
		</td>
    </tr>
    <?php endforeach; ?>
</table>