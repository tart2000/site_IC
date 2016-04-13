<?php snippet('header') ?>

	<div class="container pt mb" role="main">
		<h1><?php echo $page->title()->html() ?></h1>

		<?php $coun = 0 ?>
		<?php foreach(yaml($page->qanda()) as $question): ?>
		<?Php $coun++ ?>
		  <div class="">
		    <a href="#qu-<?php echo $coun ?>"><h3><?php echo $question['question'] ?></h3></a>
		  </div>
		<?php endforeach ?>
	</div>

		<hr>

	<div class="container mt">
		<!-- Questions YAML --> 
		<?php $count = 0 ?>
		<?php foreach(yaml($page->qanda()) as $question): ?>
		<?Php $count++ ?>
		  <div class="question mb">
		    <div id="qu-<?php echo $count ?>"><strong><p><?php echo $question['question'] ?></p></strong></div>
		    <p><?php echo $question['answer'] ?></p>
		  </div>
		<?php endforeach ?>
	</div> <!-- // container -->

	<hr>

	<div class="container mt mb">
		<?php echo $page->text()->kirbytext() ?>
	</div>

	<?php echo snippet('ready') ?>

<?php snippet('footer') ?>