<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Desfile $desfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $desfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $desfile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Desfiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Desfile Fotografias'), ['controller' => 'DesfileFotografias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Desfile Fotografia'), ['controller' => 'DesfileFotografias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="desfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($desfile) ?>
    <fieldset>
        <legend><?= __('Edit Desfile') ?></legend>
        <?php
            echo $this->Form->control('data');
            echo $this->Form->control('turma');
            echo $this->Form->control('descricao_breve');
            echo $this->Form->control('descricao_detalhada');
            echo $this->Form->control('caminho_capa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
