<h1>Categorias</h1>
<?= $this->Html->link('Novo', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td>
            <?= $this->Html->link($categoria->nome, ['action' => 'view', $categoria->id]) ?>
        </td>
        <td>
            <?= $categoria->descricao ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>