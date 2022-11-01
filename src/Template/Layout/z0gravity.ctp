<?php
$cakeDescription = $cakeDescription = 'z0gravity: make by ht from greesystem solution';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('favicon.png','/favicon.png',['type' => 'icon']); ?>

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('all.min.css') ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css') ?>

    <?= $this->Html->css('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap')?>

    <?= $this->Html->css('home.css') ?>

    <?=  $this->Html->script('jquery.min.js')?>
    <?=  $this->Html->script('https://code.jquery.com/jquery-3.3.1.slim.min.js')?>

    <?=  $this->Html->script('popper.min.js')?>
    <?=  $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')?>

    <?=  $this->Html->script('bootstrap.min.js')?>
    <?=  $this->Html->script('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js')?>




    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('js') ?>
</head>
<body>
    <!-- ht-z0gravity topbar --> 
    <div class="container-fluid sticky-top bg-light">   
    <nav class="navbar navbar-expand-lg navbar-light mx-auto">
            <h1>
                <?= $this->html->image(
                    'z0gravity-Logo.png',[
                        'alt'=>'Logo z0gravity',
                        'height'=>'40px',
                        'url'=> [
                            'controller'=>'Pages',
                            'action'=>'display','home',
                        ]
                    ]
                )?>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('Companies') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('SECTEUR PUBLIC') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('About') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('CONTACT') ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><?= __('BLOG') ?></a></li>
                    <li class="nav-item d-block d-md-none"><a href="#" class="nav-link"><?= __('Log Out') ?></a></li>
                </ul>
            </div> 
        </nav>
    </div>


    <div class="main">
        <?= $this->fetch('content') ?>
    </div>

    <footer>
        <div class="container mx-auto">
            <div class="row text-center text-md-start">
                <!-- ht-z0gravity footer info-->
                <div class="col-12 mx-auto">
                    <div class="row footerInfo">
                        <div class="col-md-4 footerLogo">
                            <?= $this->html->image(
                                'z0_Gravity_Logo_BlancBleu-1.svg',[
                                    'alt'=>'Logo z0gravity',
                                    'class'=>'img-fluid',
                                    'url'=> [
                                        'controller'=>'Pages',
                                        'action'=>'display','home',
                                    ]
                                ]
                            )?>
                            <p><?= __('Together, we go further.')?></p>
                        </div>
                        <ul class="col-md-3 list-unstyled text-white mt-0 pt-0 pb-0 mb-0 d-flex flex-column justify-content-between footerMenu">
                            <li class='pt-0 mt-0'><?= __('Companies')?></li>
                            <li><?= __('Communities')?></li>
                            <li><?= __('About')?></li>
                            <li><?= __('Contact')?></li>
                            <li><?= __('Blog')?></li>
                        </ul>
                        <div class="col-md-4 d-flex flex-column justify-content-between">
                            <div class="socialLink">
                                <p class='text-uppercase'><?= __('SUIVEZ-NOUS')?></p>
                                <a href="#"><i class="fa fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-brands fa-vimeo-v"></i></a> 
                            </div>
                            <button type='button' class='btn btn-outline-info rounded-pill' data-toggle="modal" data-target="#langguage">
                                <i class="fa-solid fa-globe"></i><span>&nbsp; <?= __('Change region')?></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end ht-z0gravity footer info-->

                <!-- ht-z0gravity coppyright-->
                <div class='coppyRight'>
                    <ul class="list-unstyled d-flex flex-column flex-md-row">
                        <ul class='list-unstyled order-md-1 d-inline-block footerSiteLink'>
                            <li class='d-inline-block'><a href="#" class='text-decoration-none'><?= __('Plan du site')?></a></li>
                            <li class='d-inline-block'><a href="#" class='text-decoration-none'><?= __('Contactez-nous')?></a></li>
                            <li class='d-inline-block'><a href="#" class='text-decoration-none'><?= __('Mentions légales')?></a></li>
                        </ul>
                        <li class='order-md-0'><a href="#" class='text-decoration-none'><?= __('© 2019 Globalsi SAS')?></a></li>
                    </ul>
                </div>
                <!-- end ht-z0gravity coppyright-->
            </div>
        </div>
    </footer>    
</body>
</html>