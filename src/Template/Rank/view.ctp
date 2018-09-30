<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank $rank
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rank'), ['action' => 'edit', $rank->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rank'), ['action' => 'delete', $rank->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rank->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rank'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rank'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rank view large-9 medium-8 columns content">
    <h3><?= h($rank->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($rank->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rank->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($rank->point) ?></td>
        </tr>
    </table>
</div>
