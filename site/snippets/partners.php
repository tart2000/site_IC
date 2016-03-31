<div class="container partners">
    <div class="row">
        <?php foreach (page('partners')->children() as $partner) : ?>
            <div class="col-md-3 col-xs-6 col-sm-4">
                <a href="<?php echo $partner->partnerLink() ?>">
                <?php if($image = $partner->images()->sortBy('sort', 'asc')->first()): ?>
                <img src="<?php echo $image->url() ?>" alt="<?php echo $partner->title()->html() ?>" class="img-responsive">
                <?php endif ?>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>