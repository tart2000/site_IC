
 	 	<footer class="footer" role="contentinfo">
 	 		<div class="container">
				<div class="row">

					<div class="col-sm-6 copyright">
						<img src="<?php echo url('assets/images/IC_MTL_Logo_Grey.png') ?>" class="smb">
						<div class="socials">
							<!-- Twitter -->
							<?php if ($site->twit()!='') : ?>
								<a href="<?php echo $site->twit() ?>" target="_blank">
									<span class="fa-stack fa-2x">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>
							<!-- Facebook -->
							<?php if ($site->faceb()!='') : ?>
								<a href="<?php echo $site->faceb() ?>" target="_blank">
									<span class="fa-stack fa-2x">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>
							<!-- Linkedin -->
							<?php if ($site->linkd()!='') : ?>
								<a href="<?php echo $site->linkd() ?>" target="_blank">
									<span class="fa-stack fa-2x">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>
							<!-- email -->
							<?php if ($site->mail()!='') : ?>
								<a href="mailto:<?php echo $site->mail() ?>?Subject=Contact%20ICMTL" target="_blank">
									<span class="fa-stack fa-2x">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							<?php endif ?>

						</div>					
					</div>
					<div class="col-sm-6 text-right">
						<?php echo page('home')->foottext()->kirbytext() ?>
					</div>
				</div>
 	 		</div>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php url('assets/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"><script>
    	
    <?php echo getBlogFooter($page); ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <?php echo js('assets/js/vendor/bootstrap.min.js'); ?>
    <?php echo js('assets/js/main.js'); ?>


		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','<?php echo $site->analytics() ? $site->analytics() : 'UA-XXXXX-X' ?>','auto');ga('send','pageview');
		</script>
		
  </body>
</html>
