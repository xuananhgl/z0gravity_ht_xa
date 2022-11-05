<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testimonial $testimonial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Testimonial'), ['action' => 'edit', $testimonial->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Testimonial'), ['action' => 'delete', $testimonial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testimonial'), ['action' => 'add']) ?> </li>

        <li><?= $this->Html->link(__('Back'), $this->request->referer()) ?> </li>
        <li><?= $this->Html->link(__('Exit'), ['controller'=>'Users','action' => 'profile']) ?></li>
        <li><?= $this->Html->link(__('Home'), '/') ?></li>
    </ul>
</nav>
<div class="testimonials view large-9 medium-8 columns content">
    <h3><?= h($testimonial->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Logo Url') ?></th>
            <td><?= h($testimonial->logo_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testimonial Author') ?></th>
            <td><?= h($testimonial->testimonial_author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testimonial Author Position') ?></th>
            <td><?= h($testimonial->testimonial_author_position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testimonial Url') ?></th>
            <td><?= h($testimonial->testimonial_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $testimonial->has('user') ? $this->Html->link($testimonial->user->id, ['controller' => 'Users', 'action' => 'view', $testimonial->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($testimonial->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($testimonial->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($testimonial->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($testimonial->description)); ?>
    </div>
</div>
