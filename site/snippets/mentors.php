<div class="container partners">
    <div class="row">
        <h2><?php echo page('mentors')->title() ?></h2>
    </div>

    <div class="row pb">
        <?php foreach (page('mentors')->children() as $mentor) : ?>
            <div class="col-md-3 col-xs-6 col-sm-4">
                <?php if($image = $mentor->images()->sortBy('sort', 'asc')->first()): ?>
                    <div class="thumb-img">
                        <?php echo thumb($image, array('width' => 400, 'height' => 400, 'crop' => true)) ?>
                    </div>
                <?php endif ?>
                <div class="mentor-meta">
                    <h3><?php echo $mentor->title() ?></h3>
                    <a href="<?php e($mentor->mentorLink()!='',$mentor->mentorLink()) ?>" target="_blank">
                        <?php echo $mentor->skill() ?> <?php e($mentor->skill() != '','•')?> <?php echo $mentor->company() ?>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>