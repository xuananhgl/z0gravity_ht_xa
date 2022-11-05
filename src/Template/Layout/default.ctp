<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$z0gSeoTitle = 'Logiciel de gestion de projets simple et ultra-accessible';
$z0gSeoDescription = 'Logiciel de gestion de projets simple et ultra-accessible';
$z0gSeoKeywords = 'Logiciel de gestion de projets';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $z0gSeoTitle ?>
        <?= $this->fetch('title') ?>
    </title>

    <!-- SEO meta data -->
    <?= $this->Html->meta('favicon.ico','/favicon.ico',['type' => 'icon']); ?>
    <?= $this->Html->meta('keywords', $z0gSeoKeywords );?>
    <?= $this->Html->meta('description', $z0gSeoDescription);?>


    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    
    <?= $this->Html->script('z0gravity.js')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="/">Home</a></li>
                <li><a target="_blank" href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
