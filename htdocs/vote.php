<?php require('header.php'); ?>
	<!-- BEGIN CONTENT -->
	<!-- container -->
	<div class="container">
		<section>
		<form action="vote_submit" method="POST" accept-charset="utf-8" class="custom">
			<div class="row">
				<div class="two columns show-on-desktops">
					<img src="images/boic_ribbon.gif"/>
					<p>Vote for your favorite local businesses in up to 81 different categories!  You can vote once per day until December 1st.</p>
				</div>
				<div class="ten columns">
					<h2>Cast Your Vote</h2>
					<div class="hide-on-desktops"><p>Vote for your favorite local businesses in up to 81 different categories!  You can vote once per day until December 1st.</p></div>
					<ul class="block-grid three-up mobile boic_category">
						
			<?php
				$ballot = json_decode(file_get_contents(dirname(__FILE__).'/javascripts/boic_categories.json'));
				error_log(print_r($ballot,1));
				error_log(print_r(dirname(__FILE__).'/javascripts/boic_categories.json',1));
				
				foreach ($ballot as $category) { ?>
					<li>
						<h4><?php echo $category->name; ?> <img src="images/ajax-loader.gif" style="display:none;"></img></h4>
						<?php
							foreach ($category->options as $o) { ?>
								<a href="#" id="<?php echo $o; ?>" class="button white"><?php echo $o; ?> </a> <br />
							<?php }	?>
					</li>
				<?php } ?>
			
			</ul></div>
			
			</div>
		</form>
		</section>
	</div>
	<!-- END CONTENT -->
	<!-- container -->
<?php require ('footer.php'); ?>