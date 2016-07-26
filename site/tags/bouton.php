<?php 
	kirbytext::$tags['bouton'] = array(
	  'attr' => array(
	    'text'
	  ),
	  'html' => function($tag) {

	   	$link = $tag->attr('bouton');
	   	$text = $tag->attr('text', 'bouton');

	    return '<a class="btn btn-lg" href="' . $link . '" role="button">' . $text . '</a>';
		}
	);
?>