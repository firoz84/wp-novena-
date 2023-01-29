
<?php 
$options = get_option( 'my_framework' ); 

$testimonials =$options['about_testimonial_title'];
$doctor_testimonials=$options['doctor_testimonial'];

?>

<section class="section testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-6">
				<div class="section-title">
					<?php 
					if($testimonials){
						?>
						<h2 class="mb-4"><?php echo $testimonials;?></h2>
						<?php
					}
					?>
					
					<div class="divider  my-4"></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">

			<?php 
			foreach( $doctor_testimonials as $patient){
				?>
					<div class="testimonial-block">
					<div class="client-info ">
						<?php 
						if($patient){
							?>
							<h4><?php echo $patient['testimonial_desg'];?></h4>
							<?php
						}
						?>

					<?php 
						if($patient){
							?>
							<span><?php echo $patient['testimonial_name'];?></span>
							<?php
						}
						?>
						</div>

					<?php 
						if($patient){
							?>
							<p><?php echo $patient['testimonial_desc'];?></p>
							<?php
						}
						?>
					
					<i class="icofont-quote-right"></i>
					
				</div>
				<?php
			}
			?>
				

				
			</div>
		</div>
	</div>
</section>