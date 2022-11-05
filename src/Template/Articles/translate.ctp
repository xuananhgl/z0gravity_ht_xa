<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\article $article
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New article'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Translate'), ['action' => 'translate']) ?></li>

        <li><?= $this->Html->link(__('Back'), $this->request->referer()) ?> </li>
        <li><?= $this->Html->link(__('Exit'), ['controller'=>'Users','action' => 'profile']) ?></li>
        <li><?= $this->Html->link(__('Home'), '/') ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Translate article') ?></legend>
        <?php
            echo $this->Form->select(
                'locale',
                [
                    ['value'=>'vi_VN','text'=>'Vietnamese'],
                    ['value'=>'de_DE','text'=>'Deutsch'],
                    ['value'=>'en_US','text'=>'English'],
                    ['value'=>'es','text'=>'Español'],
                    ['value'=>'fr_FR','text'=>'Français'],
                    ['value'=>'nl_NL','text'=>'Nederlands'],
                    ['value'=>'pl','text'=>'Polski'],
                    ['value'=>'pt-br','text'=>'Português'],
                    ['value'=>'ru','text'=>'Русский'],
                    ['value'=>'no_NO','text'=>'Bokmål'],
                    ['value'=>'el','text'=>'Ελληνικά'],
                    ['value'=>'ja','text'=>'日本語'],
                    ['value'=>'zh-cn','text'=>'繁體中文'],
                    
                ],
                ['empty' => '(choose one language to translate)']
            );

            echo $this->Form->control('title');
            echo $this->Form->control('category');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
