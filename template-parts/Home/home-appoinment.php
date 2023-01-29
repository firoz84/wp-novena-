
<?php $options = get_option( 'my_framework' ); ?>

<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 ">
				<div class="appoinment-content">
					<?php 
					if($options['appoinment_imge']){
						?>
						<img src="<?php echo $options['appoinment_imge']['url'];?>" alt="" class="img-fluid">
						<?php
					}
					?>
					
					<div class="emergency">
					<?php 
					if($options['appoinment_phone']){
						?>
						<h2 class="text-lg"><i class="icofont-phone-circle text-lg"></i><?php echo $options['appoinment_phone'];?></h2>
						<?php
					}
					?>
						
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
				<?php 
					if($options['appoinment_title']){
						?>
						<h2 class="mb-2 title-color"><?php echo $options['appoinment_title'];?></h2>
						<?php
					}
					?>
					<?php 
					if($options['appoinment_title']){
						?>
						<p class="mb-4"><?php echo $options['appoinment_description'];?></p>
						<?php
					}
					?>
					
				 <?php echo do_shortcode('[contact-form-7 id="54" title="contact form"]');?>
            </div>
			</div>
		</div>
	</div>
</section>