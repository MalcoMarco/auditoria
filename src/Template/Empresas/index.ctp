<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa[]|\Cake\Collection\CollectionInterface $empresas
 */
?>
<style type="text/css">
    .btn-danger {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab3;
    }
    .btn-primary {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
    }
    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236;
    }

    .center {
        
       margin: 0 auto;
    }

    
</style>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><?= $this->Html->link(__('INICIO'), ['controller'=> 'pages','action' => 'home'], ['class' => '']) ?></h1>

            </li>
        </ul>
        
        
</nav>
<div class="container clearfix">
<div class="empresas index large-12 medium-12 columns content">
    <h3><?= __('Empresas') ?></h3>
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ruc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresas as $empresa): ?>
            <tr>
                <td><?= $this->Number->format($empresa->id) ?></td>
                <td><?= h($empresa->nombre) ?></td>
                <td><?= h($empresa->ruc) ?></td>
                <td><?= h($empresa->direccion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Reporte PDF'), ['action' => 'impresion', $empresa->id.'.pdf'],['target' => '_blank','class' => 'btn btn-danger']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['class' => 'btn btn-primary'],['confirm' => __('Esta seguro de querer eliminarlo? # {0}?', $empresa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
</div>
