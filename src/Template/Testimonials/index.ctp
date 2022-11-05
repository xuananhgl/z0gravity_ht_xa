<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testimonial[]|\Cake\Collection\CollectionInterface $testimonials
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Testimonial'), ['action' => 'add']) ?></li>
        
        <li><?= $this->Html->link(__('Back'), $this->request->referer()) ?> </li>
        <li><?= $this->Html->link(__('Exit'), ['controller'=>'Users','action' => 'profile']) ?></li>
        <li><?= $this->Html->link(__('Home'), '/') ?></li>
    </ul>
</nav>
<div class="testimonials index large-9 medium-8 columns content">
    <h3><?= __('Testimonials') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('testimonial_author') ?></th>
                <th scope="col"><?= $this->Paginator->sort('testimonial_author_position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('testimonial_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testimonials as $testimonial): ?>
            <tr>
                <td><?= $this->Number->format($testimonial->id) ?></td>
                <td><?= h($testimonial->logo_url) ?></td>
                <td><?= h($testimonial->testimonial_author) ?></td>
                <td><?= h($testimonial->testimonial_author_position) ?></td>
                <td><?= h($testimonial->testimonial_url) ?></td>
                <td><?= $testimonial->has('user') ? $this->Html->link($testimonial->user->id, ['controller' => 'Users', 'action' => 'view', $testimonial->user->id]) : '' ?></td>
                <td><?= h($testimonial->created) ?></td>
                <td><?= h($testimonial->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testimonial->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testimonial->id]) ?>
                    <?= $this->Html->link(__('Translate'), ['action' => 'translate', $testimonial->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testimonial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]) ?>
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
