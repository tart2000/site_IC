<div class="container">
    <div class="row pb pt">
        <?php foreach (page('home')->children()->children()->limit(3) as $cta) : ?>
            <div class="col-md-4">
                <?php if($image = $cta->images()->sortBy('sort', 'asc')->first()): ?>
                    <div class="cta-img">
                        <?php echo thumb($image, array('width' => 400, 'height' => 400, 'crop' => true)) ?>
                    </div>
                <?php endif ?>
                <div class="">
                    <h3><?php echo $cta->title() ?></h3>
                    <?php echo $cta->text()->kirbytext() ?> 
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>