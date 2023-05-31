<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Add Cliente') ?></legend>
        <?php
            $this->Form->templates(
                ['dateWidget' => '{{day}}{{month}}{{year}}']
            );
            echo $this->Form->control('nome_cliente');
            echo $this->Form->control('data_nascimento',
            [
                'label' => 'Data Nascismento',
                'minYear' => date('Y') - 110,
                'maxYear' => date('Y'),
            ]);
            echo $this->Form->control('profissao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
