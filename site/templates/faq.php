<?php snippet('header') ?>

	<div class="container" role="main">
		<h1><?php echo $page->title()->html() ?></h1>

		<?php $coun = 0 ?>
		<?php foreach(yaml($page->qanda()) as $question): ?>
		<?Php $coun++ ?>
		  <div class="question">
		    <a href="#qu-<?php echo $coun ?>"><?php echo $question['question'] ?></a>
		  </div>
		<?php endforeach ?>

		<hr>

		<!-- Questions YAML --> 
		<?php $count = 0 ?>
		<?php foreach(yaml($page->qanda()) as $question): ?>
		<?Php $count++ ?>
		  <div class="question">
		    <div id="qu-<?php echo $count ?>"><?php echo $question['question'] ?></div>
		    <?php echo $question['answer'] ?>
		  </div>
		<?php endforeach ?>

	</div> <!-- // container -->

<?php snippet('footer') ?>