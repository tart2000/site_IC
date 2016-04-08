<div id="navbar" class="collapse navbar-collapse">
	<ul class="nav navbar-nav navbar-right">
	    <?php foreach($pages->visible() as $p): ?>
	      <?php if($p->hasVisibleChildren() && $p->template() != 'posts'): ?>
			<li class="dropdown<?php e($p->isOpen(), ' active') ?>">
				<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<?php foreach($p->children()->visible() as $p): ?>
					<li<?php e($p->isOpen(), ' class="active"') ?>>
						<a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
					</li>
					<?php endforeach ?>
				</ul>
			</li>
	      <?php else : ?>
			<li<?php e($p->isOpen(), ' class="active"') ?>>
				<a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
			</li>
		      <?php endif; ?>

		      <?php if($p->hasVisibleChildren()): ?>
		      <?php endif ?>

	    	</li>
    	<?php endforeach ?>


    	<?php foreach($site->languages() as $language): ?>
    		<li class="lang">
	    		<?php if ($site->language() != $language) : ?>
	    			<a href="<?php echo $page->url($language->code()) ?>">
	        			<?php echo html($language->code()) ?>
			    	</a>
		    	<?php endif ?>
	    	</li>
    	<?php endforeach ?>


    	<a href="<?php echo page('register')->url() ?>"><button type="button" class="btn navbar-btn ml"><?php echo l::get('register') ?></button></a>

	</ul>
</div><!--/.nav-collapse -->