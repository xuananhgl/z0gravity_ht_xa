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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#z0gNavbar" aria-controls="z0gNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="z0gNavbar">
        <ul class="navbar-nav ms-auto text-uppercase">
            <li class="nav-item text-center"><a href="#" class="nav-link"><?= __('Companies') ?></a></li>
            <li class="nav-item text-center"><a href="#" class="nav-link"><?= __('SECTEUR PUBLIC') ?></a></li>
            <li class="nav-item text-center"><a href="#" class="nav-link"><?= __('About') ?></a></li>
            <li class="nav-item text-center"><a href="#" class="nav-link"><?= __('CONTACT') ?></a></li>
            <li class="nav-item text-center"><a href="#" class="nav-link"><?= __('BLOG') ?></a></li>
            <li class="nav-item text-center d-block d-md-none"><a href="#" class="nav-link"><?= __('Log Out') ?></a></li>
        </ul>
    </div> 
</nav>