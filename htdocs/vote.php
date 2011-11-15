<?php require('header.php'); ?>
	<!-- BEGIN CONTENT -->
	<!-- container -->
	<div class="container">
		<section>
		<form action="vote_submit" method="POST" accept-charset="utf-8" class="custom">
			<div class="row">
				<div class="ten columns centered">
					<ul class="block-grid three-up mobile boic_category">
			<?php
				$ballot = json_decode(file_get_contents(dirname(__FILE__).'/javascripts/boic_categories.json'));
				error_log(print_r($ballot,1));
				error_log(print_r(dirname(__FILE__).'/javascripts/boic_categories.json',1));
				
				foreach ($ballot as $category) { ?>
					<li>
						<h4><?php echo $category->name; ?></h4>
						<?php
							foreach ($category->options as $o) { ?>
								<a href="#" class="button white"><?php echo $o; ?> </a> <br />
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