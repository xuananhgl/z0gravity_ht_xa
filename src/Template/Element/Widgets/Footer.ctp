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