<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portabilidade $portabilidade
 */
?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('cake.css') ?>
<nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">PORTABILIDADES</a></h1>
            </li>
        </ul>
</nav>
<div class="container clearfix">
<div class="portabilidades form large-12 medium-12 columns content">
    <?= $this->Form->create($portabilidade,['novalidate']) ?>
    <fieldset>
        <legend><?= __('Portabilidades') ?></legend>
       
            <?php
                echo $this->Form->input('p1', 
                    [
                        'value' => 'Puede ser adaptado a diferentes entornos especificados, sin aplicar acciones o mecanismos distintos de aquellos proporcionados para este proposito por el propio software considerado',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Puede ser adaptado a diferentes entornos especificados, sin aplicar acciones o mecanismos distintos de aquellos proporcionados para este proposito por el propio software considerado']
                    ]);

                echo $this->Form->input('p2', 
                    [
                        'value' => 'Puede ser instalado en un entorno especificado',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Puede ser instalado en un entorno especificado']
                    ]);

                echo $this->Form->input('p3', 
                    [
                        'value' => 'Capacidad para coexistir con otro software independiente, en un entorno común, compartiendo recursos comunes',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Capacidad para coexistir con otro software independiente, en un entorno común, compartiendo recursos comunes']
                    ]);

                echo $this->Form->input('p4', 
                    [
                        'value' => 'Puede ser usado en lugar de otro producto de software, para el mismo propósito en el mismo entorno',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Puede ser usado en lugar de otro producto de software, para el mismo propósito en el mismo entorno']
                    ]);

                echo $this->Form->input('p5', 
                    [
                        'value' => 'Capacidad para adherirse a normas o convenciones relacionadas con la portabilidad',
                        'hiddenField' => false,
                        'type' => 'checkbox',
                        'label' => ['text' => 'Capacidad para adherirse a normas o convenciones relacionadas con la portabilidad']
                    ]);

            ?>
            
        <?php
        $ultimo = "";
        foreach ($empresas as $empresa) {
            $ultimo = $empresa->id;
        }
            echo $this->Form->input('empresa_id', ['type' => 'hidden','value' => $ultimo]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
