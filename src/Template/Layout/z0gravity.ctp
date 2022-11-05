<?php
$z0gSeoTitle = 'Logiciel de gestion de projets simple et ultra-accessible';
$z0gSeoDescription = 'Logiciel de gestion de projets simple et ultra-accessible';
$z0gSeoKeywords = 'Logiciel de gestion de projets';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $z0gSeoTitle ?>
        <?= $this->fetch('title') ?>
    </title>

    <!-- SEO meta data -->
    <?= $this->Html->meta('favicon.ico','/favicon.ico',['type' => 'icon']); ?>
    <?= $this->Html->meta('keywords', $z0gSeoKeywords );?>
    <?= $this->Html->meta('description', $z0gSeoDescription);?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') ?>

    <!-- <?= $this->Html->css('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap')?> -->
    <?= $this->Html->css('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap')?>

    <?= $this->Html->css('home.css') ?>

    <!-- <?=  $this->Html->script('jquery.min.js')?> -->
    <?=  $this->Html->script('https://code.jquery.com/jquery-3.6.1.slim.min.js')?>

    <!-- <?=  $this->Html->script('popper.min.js')?> -->
    <?=  $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')?>

    <!-- <?=  $this->Html->script('bootstrap.min.js')?> -->
    <?=  $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')?>

    <?= $this->Html->script('z0gravity.js')?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('js') ?>
</head>
<body>
    <!-- ht-admin bar -->
    <div class="container-fluid sticky-top bg-dark">   
        <?php 
        if(isset($user)){
            echo $this->element('Widgets/Adminbar') ;
        }
        ?>   
    </div>
    <!-- ht-z0gravity topbar --> 
    <div class="container-fluid sticky-top bg-light">   
        <?= $this->element('Widgets/Navbar') ?>   
    </div>


    <div class="main">
        <?= $this->fetch('content') ?>
    </div>

    <?= $this->element('Widgets/Footer') ?>      
</body>
</html>