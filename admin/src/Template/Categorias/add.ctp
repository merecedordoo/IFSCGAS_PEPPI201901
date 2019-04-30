<h1>New Categoria</h1>
<?php
    echo $this->Form->create($categoria);
    echo $this->Form->control('nome');
    echo $this->Form->control('descricao');
    echo $this->Form->button(__('Save Categoria'));
    echo $this->Form->end();
?>