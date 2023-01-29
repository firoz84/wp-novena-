
<?php $options = get_option( 'my_framework' ); ?>


<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<?php 
					if($options['testimonial_title']){
						?>

						<h2><?php echo $options['testimonial_title'];?></h2>

						<?php
					}
					?>
					
					<div class="divider mx-auto my-4"></div>

					<?php 
					if($options['testimonial_description']){
						?>

					<p><?php echo $options['testimonial_description'];?></p>

						<?php
					}
					?>
					
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">

			<?php 
				$testimonials=$options['testimonial_repeater'];

				foreach($testimonials as $testimonial){
					?>
					<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<?php 
						if($testimonial['testimonial_imge']){
							?>
							<img src="<?php echo $testimonial['testimonial_imge']['url']?>" alt="" class="img-fluid">
							<?php
						}
						?>
						
					</div>

					<div class="client-info ">
						<?php 
						if($testimonial['testimonial_name']){
							?>
								<h4><?php echo $testimonial['testimonial_name']?></h4>
							<?php
						}
						?>

					<?php 
						if($testimonial['testimonial_degis']){
							?>
								<span><?php echo $testimonial['testimonial_degis']?></span>
							<?php
						}
						?>
						<?php 
						if($testimonial['testimonial_desc']){
							?>
								<p><?php echo $testimonial['testimonial_desc']?></p>
							<?php
						}
						?>
							
					</div>
				</div>
					<?php

				}
			?>
				

				
			</div>
		</div>
	</div>
</section>