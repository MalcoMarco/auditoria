<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eficiencias'), ['controller' => 'Eficiencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Eficiencia'), ['controller' => 'Eficiencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fiabilidades'), ['controller' => 'Fiabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fiabilidade'), ['controller' => 'Fiabilidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcionalidades'), ['controller' => 'Funcionalidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionalidade'), ['controller' => 'Funcionalidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mantenibilidades'), ['controller' => 'Mantenibilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mantenibilidade'), ['controller' => 'Mantenibilidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Portabilidades'), ['controller' => 'Portabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portabilidade'), ['controller' => 'Portabilidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seguridades'), ['controller' => 'Seguridades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seguridade'), ['controller' => 'Seguridades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usabilidades'), ['controller' => 'Usabilidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usabilidade'), ['controller' => 'Usabilidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3><?= h($empresa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($empresa->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($empresa->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empresa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ruc') ?></th>
            <td><?= $this->Number->format($empresa->ruc) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Eficiencias') ?></h4>
        <?php if (!empty($empresa->eficiencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('E1') ?></th>
                <th scope="col"><?= __('E2') ?></th>
                <th scope="col"><?= __('E3') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->eficiencias as $eficiencias): ?>
            <tr>
                <td><?= h($eficiencias->id) ?></td>
                <td><?= h($eficiencias->e1) ?></td>
                <td><?= h($eficiencias->e2) ?></td>
                <td><?= h($eficiencias->e3) ?></td>
                <td><?= h($eficiencias->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Eficiencias', 'action' => 'view', $eficiencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Eficiencias', 'action' => 'edit', $eficiencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Eficiencias', 'action' => 'delete', $eficiencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eficiencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fiabilidades') ?></h4>
        <?php if (!empty($empresa->fiabilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fi1') ?></th>
                <th scope="col"><?= __('Fi2') ?></th>
                <th scope="col"><?= __('Fi3') ?></th>
                <th scope="col"><?= __('Fi4') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->fiabilidades as $fiabilidades): ?>
            <tr>
                <td><?= h($fiabilidades->id) ?></td>
                <td><?= h($fiabilidades->fi1) ?></td>
                <td><?= h($fiabilidades->fi2) ?></td>
                <td><?= h($fiabilidades->fi3) ?></td>
                <td><?= h($fiabilidades->fi4) ?></td>
                <td><?= h($fiabilidades->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fiabilidades', 'action' => 'view', $fiabilidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fiabilidades', 'action' => 'edit', $fiabilidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fiabilidades', 'action' => 'delete', $fiabilidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fiabilidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Funcionalidades') ?></h4>
        <?php if (!empty($empresa->funcionalidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fu1') ?></th>
                <th scope="col"><?= __('Fu2') ?></th>
                <th scope="col"><?= __('Fu3') ?></th>
                <th scope="col"><?= __('Fu4') ?></th>
                <th scope="col"><?= __('Fu5') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->funcionalidades as $funcionalidades): ?>
            <tr>
                <td><?= h($funcionalidades->id) ?></td>
                <td><?= h($funcionalidades->fu1) ?></td>
                <td><?= h($funcionalidades->fu2) ?></td>
                <td><?= h($funcionalidades->fu3) ?></td>
                <td><?= h($funcionalidades->fu4) ?></td>
                <td><?= h($funcionalidades->fu5) ?></td>
                <td><?= h($funcionalidades->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Funcionalidades', 'action' => 'view', $funcionalidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Funcionalidades', 'action' => 'edit', $funcionalidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcionalidades', 'action' => 'delete', $funcionalidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionalidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Mantenibilidades') ?></h4>
        <?php if (!empty($empresa->mantenibilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('M1') ?></th>
                <th scope="col"><?= __('M2') ?></th>
                <th scope="col"><?= __('M3') ?></th>
                <th scope="col"><?= __('M4') ?></th>
                <th scope="col"><?= __('M5') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->mantenibilidades as $mantenibilidades): ?>
            <tr>
                <td><?= h($mantenibilidades->id) ?></td>
                <td><?= h($mantenibilidades->m1) ?></td>
                <td><?= h($mantenibilidades->m2) ?></td>
                <td><?= h($mantenibilidades->m3) ?></td>
                <td><?= h($mantenibilidades->m4) ?></td>
                <td><?= h($mantenibilidades->m5) ?></td>
                <td><?= h($mantenibilidades->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Mantenibilidades', 'action' => 'view', $mantenibilidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Mantenibilidades', 'action' => 'edit', $mantenibilidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Mantenibilidades', 'action' => 'delete', $mantenibilidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mantenibilidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Portabilidades') ?></h4>
        <?php if (!empty($empresa->portabilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('P1') ?></th>
                <th scope="col"><?= __('P2') ?></th>
                <th scope="col"><?= __('P3') ?></th>
                <th scope="col"><?= __('P4') ?></th>
                <th scope="col"><?= __('P5') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->portabilidades as $portabilidades): ?>
            <tr>
                <td><?= h($portabilidades->id) ?></td>
                <td><?= h($portabilidades->p1) ?></td>
                <td><?= h($portabilidades->p2) ?></td>
                <td><?= h($portabilidades->p3) ?></td>
                <td><?= h($portabilidades->p4) ?></td>
                <td><?= h($portabilidades->p5) ?></td>
                <td><?= h($portabilidades->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Portabilidades', 'action' => 'view', $portabilidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Portabilidades', 'action' => 'edit', $portabilidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Portabilidades', 'action' => 'delete', $portabilidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portabilidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Seguridades') ?></h4>
        <?php if (!empty($empresa->seguridades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('S1') ?></th>
                <th scope="col"><?= __('S2') ?></th>
                <th scope="col"><?= __('S3') ?></th>
                <th scope="col"><?= __('S4') ?></th>
                <th scope="col"><?= __('S5') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->seguridades as $seguridades): ?>
            <tr>
                <td><?= h($seguridades->id) ?></td>
                <td><?= h($seguridades->s1) ?></td>
                <td><?= h($seguridades->s2) ?></td>
                <td><?= h($seguridades->s3) ?></td>
                <td><?= h($seguridades->s4) ?></td>
                <td><?= h($seguridades->s5) ?></td>
                <td><?= h($seguridades->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Seguridades', 'action' => 'view', $seguridades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Seguridades', 'action' => 'edit', $seguridades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seguridades', 'action' => 'delete', $seguridades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seguridades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usabilidades') ?></h4>
        <?php if (!empty($empresa->usabilidades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('U1') ?></th>
                <th scope="col"><?= __('U2') ?></th>
                <th scope="col"><?= __('U3') ?></th>
                <th scope="col"><?= __('U4') ?></th>
                <th scope="col"><?= __('U5') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($empresa->usabilidades as $usabilidades): ?>
            <tr>
                <td><?= h($usabilidades->id) ?></td>
                <td><?= h($usabilidades->u1) ?></td>
                <td><?= h($usabilidades->u2) ?></td>
                <td><?= h($usabilidades->u3) ?></td>
                <td><?= h($usabilidades->u4) ?></td>
                <td><?= h($usabilidades->u5) ?></td>
                <td><?= h($usabilidades->empresa_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usabilidades', 'action' => 'view', $usabilidades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usabilidades', 'action' => 'edit', $usabilidades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usabilidades', 'action' => 'delete', $usabilidades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usabilidades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
