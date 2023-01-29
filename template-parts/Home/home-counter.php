
<?php $options = get_option( 'my_framework' ); ?>
<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
			
				<?php 
				$ctps=$options['cpt_repeater'];

				foreach($ctps as $ctp){
					?>
					<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="<?php echo $ctp['ctp_icon'];?>"></i>
						<span class="h3"><?php echo $ctp['ctp_number'];?></span><?php echo $ctp['ctp_prefix'];?>
						<p><?php echo $ctp['ctp_title'];?></p>
					</div>
				</div>
					<?php
				}
				?>
				
			
			</div>
		</div>
	</div>
</section>