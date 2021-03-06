<?php snippet('header') ?>

	<!-- Accueil -->
	<?php 
		if ( s::get('device_class') == 'mobile' ) {
			if ($page->mobilebg() != '') {
				$bg = $page->mobilebg()->toFile();
				$bg = $bg->url();
			} else {
				$bg = url('/assets/images/illus_icmtl.jpg'); 
			}
		} else if ($page->bg() != '') {
			$bg = $page->bg()->toFile();
			$bg = $bg->url(); 
		} else {
			$bg = url('/assets/images/illus_icmtl.jpg');
		}
	?>

	<div id="welcome" style="background-image:url(<?php echo $bg ?>);">
		
		<?php if ( s::get('device_class') == 'mobile' ) : ?>
			<div class="container">
				<h1><?php echo $page->baseline() ?></h1>
				<!-- <a class="btn btn-lg" href="<?php echo $site->url() ?>/about" role="button"><?php echo l::get('more') ?></a>
				-->
			</div>
		<?php else : ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-7 col-sm-4 right">
						<h1><?php echo $page->baseline() ?></h1>
						<!-- <a class="btn btn-lg" href="<?php echo $site->url() ?>/about" role="button"><?php echo l::get('more') ?></a>
						-->
					</div>
				</div>
			</div>
		<?php endif ?>
	</div>

	<div class="description">
		<h1><?php echo $page->description() ?></h1>
	</div>

	<?php echo snippet('ctas') ?>

	<div class="container hp pt pb" role="main">
		<?php echo $page->text()->kirbytext() ?>

	</div> <!-- // container -->

	<?php echo snippet('mentors') ?>

	<!-- Google map -->
	<div class='embed-container maps mt'>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.3914235548104!2d-73.55798048444129!3d45.50219857910148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a5852a620f9%3A0xbc3d155e83f1413a!2s409+Rue+Saint+Nicolas%2C+Montr%C3%A9al%2C+QC+H2Y+2P4!5e0!3m2!1sen!2sca!4v1459366166442" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<?php echo snippet('ready') ?>

	<?php echo snippet('partners') ?>

<?php snippet('footer') ?>