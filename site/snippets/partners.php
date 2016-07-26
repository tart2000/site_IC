<div class="container partners mt mb">
    <div class="row center pb">
        <em><?php echo page('partners')->title() ?></em>
    </div>

    <?php 
        $num = page('partners')->children()->count(); 
        $offset = floor(12-2*$num)/2;
    ?>

    <div class="row">
        <?php $count = 0 ?>
        <?php foreach (page('partners')->children() as $partner) : ?>
            <div class="col-md-2 <?php if ($count==0) {e($num!=0,'col-md-offset-'.$offset);}; ?> col-xs-6">
                <a href="<?php echo $partner->partnerLink() ?>" target="_blank">
                <?php if($image = $partner->images()->sortBy('sort', 'asc')->first()): ?>
                    <img src="<?php echo $image->url() ?>" alt="<?php echo $partner->title()->html() ?>" class="img-responsive partner">
                <?php endif ?>
                </a>
            </div>
            <?php $count++ ?>
        <?php endforeach ?>
    </div>
</div>