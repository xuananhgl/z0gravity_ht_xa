<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Edit Banner'), ['action' => 'edit', $banner->id]) ?> </li>
        
        <li><?= $this->Html->link(__('Back'), $this->request->referer()) ?> </li>
        <li><?= $this->Html->link(__('Exit'), ['controller'=>'Users','action' => 'profile']) ?></li>
        <li><?= $this->Html->link(__('Home'), '/') ?></li>
    </ul>
</nav>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Translate Banner') ?></legend>
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
            echo $this->Form->control('description');
            echo $this->Form->control('btn_content');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
