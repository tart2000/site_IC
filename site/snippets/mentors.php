

<div class="container mentors">
    <div class="row intro pb pt">
        <div class="col-md-12">
            <h2><?php echo page('mentors')->title() ?></h2>
        </div>
        <div class="col-md-12">
            <?php echo page('mentors')->text()->kirbytext() ?>
        </div>
    </div>

    <?php $count = 0 ?>
    <ul class="nav nav-pills nav-justified pb" role="tablist">
        <?php foreach (page('categories')->children() as $cat) : ?>
            <li role="presentation" class="<?php e($count==0,'active') ?>">
                <a href="#<?php echo $cat->dirname() ?>" aria-controls="<?php echo $cat->dirname() ?>" role="tab" data-toggle="tab"><?php echo $cat->title() ?></a>
            </li>
            <?php $count++ ?>
        <?php endforeach ?>
    </ul> 
    
    <?php $count = 0 ?>
    <div class="tab-content">
        <?php foreach (page('categories')->children() as $cat) : ?>
            <div role="tabpanel" class="row pb tab-pane fade <?php e($count==0,'in active') ?>" id="<?php echo $cat->dirname() ?>">
                <?php $thecat = $cat->uid() ?>
                <?php foreach (page('mentors')->children()->filterBy('category','*=',$thecat) as $mentor) : ?>
                    <div class="col-md-3 col-xs-6 col-sm-4 mb">
                        <?php if($image = $mentor->images()->sortBy('sort', 'asc')->first()): ?>
                            <div class="thumb-img">
                                <?php echo thumb($image, array('width' => 400, 'height' => 400, 'crop' => true)) ?>
                            </div>
                        <?php endif ?>
                        <div class="mentor-meta">
                            <h3><?php echo $mentor->title() ?></h3>
                            <a href="<?php e($mentor->mentorLink()!='',$mentor->mentorLink()) ?>" target="_blank">
                                <?php echo $mentor->skill() ?> <?php if($mentor->skill() != '' && $mentor->company()!='') { echo ' - ';} ?> <?php echo $mentor->company() ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <?php $count++ ?>
        <?php endforeach ?>
    </div>
</div>
