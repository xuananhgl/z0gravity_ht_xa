<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Back'), $this->request->referer()) ?> </li>
        <li><?= $this->Html->link(__('Exit'), ['controller'=>'Users','action' => 'profile']) ?></li>
        <li><?= $this->Html->link(__('Home'), '/') ?></li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Email') ?></th>
            <td><?= h($user->user_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Password') ?></th>
            <td><?= h($user->user_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Url') ?></th>
            <td><?= h($user->user_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->id, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Articles') ?></h4>
        <?php if (!empty($user->articles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Img Url') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Category') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Article Url') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->articles as $articles): ?>
            <tr>
                <td><?= h($articles->id) ?></td>
                <td><?= h($articles->img_url) ?></td>
                <td><?= h($articles->title) ?></td>
                <td><?= h($articles->category) ?></td>
                <td><?= h($articles->description) ?></td>
                <td><?= h($articles->article_url) ?></td>
                <td><?= h($articles->user_id) ?></td>
                <td><?= h($articles->created) ?></td>
                <td><?= h($articles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Banners') ?></h4>
        <?php if (!empty($user->banners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Video Url') ?></th>
                <th scope="col"><?= __('Btn Content') ?></th>
                <th scope="col"><?= __('Image Url') ?></th>
                <th scope="col"><?= __('Background Color') ?></th>
                <th scope="col"><?= __('Text Color') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->banners as $banners): ?>
            <tr>
                <td><?= h($banners->id) ?></td>
                <td><?= h($banners->title) ?></td>
                <td><?= h($banners->description) ?></td>
                <td><?= h($banners->video_url) ?></td>
                <td><?= h($banners->btn_content) ?></td>
                <td><?= h($banners->image_url) ?></td>
                <td><?= h($banners->background_color) ?></td>
                <td><?= h($banners->text_color) ?></td>
                <td><?= h($banners->user_id) ?></td>
                <td><?= h($banners->created) ?></td>
                <td><?= h($banners->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Banners', 'action' => 'view', $banners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Banners', 'action' => 'edit', $banners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Banners', 'action' => 'delete', $banners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Testimonials') ?></h4>
        <?php if (!empty($user->testimonials)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Logo Url') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Testimonial Author') ?></th>
                <th scope="col"><?= __('Testimonial Author Position') ?></th>
                <th scope="col"><?= __('Testimonial Url') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->testimonials as $testimonials): ?>
            <tr>
                <td><?= h($testimonials->id) ?></td>
                <td><?= h($testimonials->logo_url) ?></td>
                <td><?= h($testimonials->description) ?></td>
                <td><?= h($testimonials->testimonial_author) ?></td>
                <td><?= h($testimonials->testimonial_author_position) ?></td>
                <td><?= h($testimonials->testimonial_url) ?></td>
                <td><?= h($testimonials->user_id) ?></td>
                <td><?= h($testimonials->created) ?></td>
                <td><?= h($testimonials->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Testimonials', 'action' => 'view', $testimonials->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Testimonials', 'action' => 'edit', $testimonials->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Testimonials', 'action' => 'delete', $testimonials->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testimonials->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
