<section class="ourArticles d-none d-md-block">
    <div class="z0title">
        <h2><?= __('Our articles')?></h2>
    </div>
    <div class="ourArticleCard container">
        <div class="row articles d-md-flex justify-content-between flex-wrap">
            <?php $i = 1 ?>
            <?php foreach($articles as $Article):?>    
                <div class="ourArticlesCard d-flex justify-content-between mx-auto" id="<?= h('ourArticlesCard'.$i++)?>">
                    <?=$this->Html->image($Article->img_url, ['alt' => 'article thumbnail', 'class'=>'articlesCard']);?>
                    <div class="d-flex flex-column justify-content-between h-100">    
                        <h5 class='card-title'><?= __($Article->title)?></h5>
                        <div class='card-tag'>
                            <p class=" text-uppercase px-2 m-0 d-inline-block"><?= __($Article->category)?></p>
                            <span class ="px-2">
                                <?php echo $Article->modified->timeAgoInWords([
                                    'accuracy' => ['month' => 'month'],
                                    'end' => '1 year'
                                ])?>
                            </span>
                        </div>
                        <p class="card-text h-100"><?= __($Article->description)?></p>
                        <?= $this->Html->link( __('Read the article'), 
                            $Article->article_url, 
                            ['escape' => false, 
                            'title' => __('Read the article'),
                            'class' => 'btn btn-outline-info rounded-pill p-0',
                            'role' => 'button',
                            ])?>
                    </div>
                </div>
                <?php if ($i == 4) {$i=='';} ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="row mx-auto readMoreArticles">
        <button class='btn btn-primary rounded-pill mx-auto'><?= __('See all articles')?></button>
    </div>
</section>