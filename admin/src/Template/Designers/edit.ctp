<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Designer $designer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $designer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $designer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Designers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['controller' => 'Artigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artigo'), ['controller' => 'Artigos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="designers form large-9 medium-8 columns content">
    <?= $this->Form->create($designer) ?>
    <fieldset>
        <legend><?= __('Edit Designer') ?></legend>
        <?php
            echo $this->Form->control('senha');
            echo $this->Form->control('aprovado');
            echo $this->Form->control('nome');
            echo $this->Form->control('email');
            echo $this->Form->control('telefone');
            echo $this->Form->control('celular');
            echo $this->Form->control('celular_whatsapp');
            echo $this->Form->control('inscricao');
            echo $this->Form->control('atualizacao');
            echo $this->Form->control('curso');
            echo $this->Form->control('fase');
            echo $this->Form->control('apresentacao_breve');
            echo $this->Form->control('apresentacao_detalhada');
            echo $this->Form->control('caminho_fotografia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
