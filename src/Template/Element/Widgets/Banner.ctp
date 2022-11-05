<section class='Banner'>
    <div class="container">
        <div class='row mx-auto text-left'>
            <div class='position-relative h-100 p-0 bannerContent'>
                    <h2 class='col-md-8'><?php echo ($banner->title)?></h2>
                    <p class='col-md-4'><?= __($banner->description) ?></p><br>
                    <button  type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#videoModal"><?= __($banner->btn_content) ?></button><br><br>
                    <button class="btn rounded-circle iconPlay" data-toggle="modal" data-target="#videoModal"><i class="fa fa-thin fa-play"></i></button><span>  &nbsp; <?= __('Voir la vidéo') ?></span>               
                <div class="videoThumbnai">
                    <?= $this->Html->media("video.mp4", [
                        'poster'=> $banner->image_url,
                        'width' => '733',
                        'height' => '412',
                        'type' => 'video/ogg',
                        'class'=> 'img-fluid',],
                    )?>
                    <span class='iconMute'><i class="fa fa-solid fa-volume-xmark"></i></span>
                </div>
            </div>       
        </div>
    </div>
</section>
<script>
    document.querySelector(".bannerContent>h2").innerHTML = document.querySelector(".bannerContent>h2").innerHTML.replaceAll(".",".<br>");
</script>