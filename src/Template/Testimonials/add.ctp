<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testimonial $testimonial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testimonials form large-9 medium-8 columns content">
    <?= $this->Form->create($testimonial) ?>
    <fieldset>
        <legend><?= __('Add Testimonial') ?></legend>
        <?php
            echo $this->Form->control('logo_url');
            echo $this->Form->control('description');
            echo $this->Form->control('testimonial_author');
            echo $this->Form->control('testimonial_author_position');
            echo $this->Form->control('testimonial_url');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
