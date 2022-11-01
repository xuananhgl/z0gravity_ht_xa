<section class='TestimonialsCarousel'>
    <div class="container-fluid mx-auto p-0">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide h-100" data-interval="false">
                <div class="carousel-inner">
                    <?php foreach ($testimonials as $testimonial):?>
                        <div class="carousel-item active">
                        <blockquote class="mx-auto d-block blockquote bg-white position-relative">
                            <p class='text-uppercase m-0 blockquoteTag'>PRESSE</p>
                            <?= $this->html->image(
                                $testimonial->logo_url,
                                [
                                    'alt'=>'Press Logo',
                                    'height'=>'40px',
                                    'url'=> $testimonial->testimonial_url,
                                ]
                            )?>
                            <p><i><?= __($testimonial->description)?></i></p>
                            <footer class="blockquote-footer p-0">
                                <cite title="Stéphane Touchet"><?= __($testimonial->testimonial_author)?></cite>
                                <div class="d-flex flex-column flex-md-row justify-content-between">
                                <p><?= __($testimonial->testimonial_author_position)?></p>
                                <span class='text-end'>
                                    <?= $this->Html->link(
                                    __('Read the article ').'<i class="fa fa-thin fa-arrow-up-right-from-square p-2"></i>',
                                    $testimonial->testimonial_url,
                                    ['escape' => false, 'title' => __('Read the article')]
                                    )
                                    ?> 
                                </span>
                                </div>
                            </footer>
                        <div class="position-absolute slideBtn">
                            <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                            <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                        </div>
                        </blockquote>
                        </div>
                    <?php break; ?>
                    <?php endforeach; ?>
                    <?php foreach ($testimonials as $testimonial):?>
                        <div class="carousel-item">
                        <blockquote class="mx-auto d-block blockquote bg-white position-relative">
                            <p class='text-uppercase m-0 blockquoteTag'>PRESSE</p>
                            <?= $this->html->image(
                                $testimonial->logo_url,
                                [
                                    'alt'=>'Press Logo',
                                    'height'=>'40px',
                                    'url'=> $testimonial->testimonial_url,
                                ]
                            )?>
                            <p><i><?= __($testimonial->description)?></i></p>
                            <footer class="blockquote-footer p-0">
                                <cite title="Stéphane Touchet"><?= __($testimonial->testimonial_author)?></cite>
                                <div class="d-flex flex-column flex-md-row justify-content-between">
                                <p><?= __($testimonial->testimonial_author_position)?></p>
                                <span class='text-end'>
                                    <?= $this->Html->link(
                                    __('Read the article ').'<i class="fa fa-thin fa-arrow-up-right-from-square p-2"></i>',
                                    $testimonial->testimonial_url,
                                    ['escape' => false, 'title' => __('Read the article')]
                                    )
                                    ?> 
                                </span>
                                </div>
                            </footer>
                        <div class="position-absolute slideBtn">
                            <a href="#carouselExampleIndicators" role="button" data-slide="next"><i class="fa fa-angle-left text-dark text-lg"></i></a>
                            <a href="#carouselExampleIndicators" role="button" data-slide="prev"><i class="fa fa-angle-right text-dark text-lg"></i></a>
                        </div>
                        </blockquote>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>