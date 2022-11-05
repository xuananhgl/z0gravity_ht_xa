<?php $this->layout = 'z0gravity'?>
<header style="<?php echo $this->Html->style([
    'background-color' => $banner->background_color,
    'color' => $banner->text_color
])?>">
<!-- end ht-z0gravity topbar -->

<!-- ht-z0gravity headerBanner -->
    <?php echo $this->element('Widgets/Banner'); ?>
<!-- ht-z0gravity carousel -->
    <?php echo $this->element('Widgets/TestimonialsCarousel'); ?>
           
</header>
<!-- end header  -->

<!-- ht-z0gravity description -->
    <section class='z0Project text-white'>
<!-- ht-z0gravity project description with image -->
        <div class="container">   
            <div class="row align-items-center z0title z0ProjectImage justify-content-center">
                <h2 class='col-md-2 d-inline-block my-auto text-md-start'><?= __('TO SHORTEN IT.')?></h2>
                <p class='col-md-9 d-inline-block my-auto text-center text-md-start offset-md-1'> <b><?= __('Z0 Gravity is a multi-project management software:')?></b> <?= __('whatever their complexity, you easily manage the schedules, budgets and human resources of your projects through cross-functional and collaborative use.')?></p>
            </div>
        </div>
        <div class="card bigcard container-md">
            <div class="row card-body">
               <div class="col-md-8 text-center text-md-start cardbackground">
                  <h2 class="card-title text-white"><?= __('Our objective :')?></h2>
                   <p class="card-text col-md-8"><?= __('It means helping any type of organization to carry out its projects with a single watchword:')?></p>
                   <p><strong><?= __('sim-pli-ci-ty !')?></strong></p>
                </div>
                <?= $this->Html->image(
                    'ZG_HomeObjectif_2x.jpg',[
                        'class'=>"col-md-4 img-fluid",
                        'alt'=>"sans"
                    ]
                )?>
            </div>
        </div>
    
<!-- ht-z0gravity project description with video -->
        <div class="contaier-fluid">
            <div class="row mx-auto z0title z0ProjectVideo ">
                <h2><?= __('Discover the universe z0 Gravity')?></h2>
                <p><?= __('Schedules, budgets, calendars… In the blink of an eye, you have a global and strategic vision of the progress of your projects in real time!')?></p><br><br>
                <button type="button" class="btn btn-warning rounded-pill"><i class="fa fa-thin fa-play"></i>&nbsp; <?= __('Video presentation')?></button>
            </div>
            <div class="row mx-auto z0gravityMobiDesktop">
                <div class="d-flex justify-content-center">
                    <?= $this->Html->image(
                        'z0Ggravity_mobi_desktop.png',[
                            'alt' => "z0gravity_mobi_desktop",
                            'class' => 'col-12 img-fluid' 
                        ]
                    )?>
                </div>
            </div>
        </div>
    </section>
<!-- ht-z0gravity company connect -->
    <section class='container z0Company'>
            
    <div class="z0title">
        <h2><?= __('You are…')?></h2>
    </div>

<!-- ht-z0gravity company 3 card short description-->  
        
        <div class="row mx-auto text-center d-flex justify-content-center descritonCard">
            <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mx-auto">
                <?=$this->Html->image('ZG_icon_home_entreprise@3x.png',[
                    'class' => "card-img-top",
                    'alt' => "ZG_icon_home_promeneur"
                ])?>
                <div class="card-body">
                    <h5 class="card-title"><?= __('A company')?> </h5>
                    <p class="card-text h-100"><?= __('Teamwork: unite your teams around a common goal.')?></p>
                    <a href="#" class="btn btn-primary rounded-pill w-100"><?= __('3,2,1… Go !')?></a>
                </div>
            </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mx-auto">
                <?=$this->Html->image('ZG_icon_home_collectivites@3x.png',[
                    'class' => "card-img-top",
                    'alt' => "ZG_icon_home_promeneur"
                ])?>
                <div class="card-body">
                    <h5 class="card-title"><?= __('A community')?></h5>
                    <p class="card-text h-100"><?= __('Bring together the actors of your project via a common software!')?></p>
                    <a href="#" class="btn btn-danger rounded-pill w-100"><?= __('Find out how')?></a>
                </div>    
            </div>
            </div>
            <div class="col-md-4 d-flex align-items-stretch">
            <div class="card mx-auto">
                <?=$this->Html->image('ZG_icon_home_promeneur@3x.png',[
                    'class' => "card-img-top",
                    'alt' => "ZG_icon_home_promeneur"
                ])?>
                <div class="card-body">
                    <h5 class="card-title"><?= __('A lost walker')?></h5>
                    <p class="card-text h-100"><?= __('Welcome ! Sit down and let yourself be guided.')?></p>
                    <a href="#" class="btn btn-warning rounded-pill w-100"><?= __('Let\'s start here')?></a>
                </div>
            </div>
            </div>
        </div>

<!-- end ht-z0gravity company 3 card short description--> 

<!-- ht- ht-z0gravity company Nos articles  -->
<?php echo $this->element('Widgets/Articles'); ?>

<!-- ht-z0gravity call action button-->
    <div class="z0title callAction ">
        <h2>
            <b><?= __('Enough about us.')?></b><br>
            <?= __('Tell us about you !')?>
        </h2>
    </div>
    <div class="row mx-auto callActionBtn">
        <button class='btn btn-warning rounded-pill text-white mx-auto'><?= __('On discute !')?></button>
    </div>

<!-- end ht-z0gravity call action button-->
    </section>

<!-- ht-z0gravity footer -->
    
    
<!-- ht-z0gravity hidden content--> 

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl mx-auto">
    <div class="modal-content">
        <div class="embed-responsive embed-responsive-16by9 w-100">
            <iframe class="embed-responsive-item w-100" allowscriptaccess="always" src="<?=$banner->video_url?>" title="video player"  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
  </div>
</div>
<!-- ht-g0gravity showVideo  -->
<!-- Modal -->
<div class="modal fade" id="langguage" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl changeLanguage">
        <div class="modal-content mx-auto pt-0">
            <div class="modal-header pb-0 flex-md-column-reverse">
                <h2 class="modal-title align-self-md-start mb-0"><?= __('Changer de région')?></h2>
                <button type="button" class="close align-self-md-end p-0 m-0 position-absolute" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="fa fa-thin fa-xmark"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid p-0">
                    <div class="row"> 
                    <p>
                        <?= __('If you select another region, the language and content of z0gravity.com will change.')?>
                    </p>

                    <?php
                        $langList = [
                            $this->Html->link(__x('listLanguage','Vietnamese'), '?lang=vi_VN'),
                            $this->Html->link(__x('listLanguage','German'), '?lang=de_DE'),
                            $this->Html->link(__x('listLanguage','English'), '?lang=en_US'),
                            $this->Html->link(__x('listLanguage','Spanish'), '?lang=es_ES'),
                            $this->Html->link(__x('listLanguage','French'), '?lang=fr_FR'),
                            $this->Html->link(__x('listLanguage','Nederlands'), '?lang=nl_NL'),
                            $this->Html->link(__x('listLanguage','Polish'), '?lang=pl_PL'),
                            $this->Html->link(__x('listLanguage','Português'), '?lang=pt_BR'),
                            $this->Html->link(__x('listLanguage','Русский'), '?lang=ru_RU'),
                            $this->Html->link(__x('listLanguage','Bokmål'), '?lang=nb_NO'),
                            $this->Html->link(__x('listLanguage','Ελληνικά'), '?lang=el_GR'),
                            $this->Html->link(__x('listLanguage','日本語'), '?lang=ja_JP'),
                            $this->Html->link(__x('listLanguage','繁體中文'), '?lang=zh_CN')
                        ];
                        echo $this->Html->nestedList($langList, [
                            'class' => 'list-unstyled row p-0',
                        ]);
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

