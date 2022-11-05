<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testimonial $testimonial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('All Actions') ?></li>
        <li><?= $this->Html->link(__('Back'), $this->request->referer()) ?> </li>
        <li><?= $this->Html->link(__('Exit'), ['controller'=>'Users','action' => 'profile']) ?></li>
        <li><?= $this->Html->link(__('Home'), '/') ?></li>
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
