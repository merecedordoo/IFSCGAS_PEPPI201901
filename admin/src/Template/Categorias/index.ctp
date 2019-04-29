<h1>Categorias</h1>
<table>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td>
            <?= $this->Html->link($categoria->nome, ['action' => 'view']) ?>
        </td>
        <td>
            <?= $categoria->descricao ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>