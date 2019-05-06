<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designer[]|\Cake\Collection\CollectionInterface $designers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Designer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designers index large-9 medium-8 columns content">
    <h3><?= __('Designers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aprovado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular_whatsapp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inscricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atualizacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fase') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apresentacao_breve') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caminho_fotografia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($designers as $designer): ?>
            <tr>
                <td><?= $this->Number->format($designer->id) ?></td>
                <td><?= h($designer->senha) ?></td>
                <td><?= h($designer->aprovado) ?></td>
                <td><?= h($designer->nome) ?></td>
                <td><?= h($designer->email) ?></td>
                <td><?= h($designer->telefone) ?></td>
                <td><?= h($designer->celular) ?></td>
                <td><?= h($designer->celular_whatsapp) ?></td>
                <td><?= h($designer->inscricao) ?></td>
                <td><?= h($designer->atualizacao) ?></td>
                <td><?= h($designer->curso) ?></td>
                <td><?= h($designer->fase) ?></td>
                <td><?= h($designer->apresentacao_breve) ?></td>
                <td><?= h($designer->caminho_fotografia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $designer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $designer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $designer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
