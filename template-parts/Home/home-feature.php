
<?php $options = get_option( 'my_framework' ); 

	$feature_switch=$options['features_switch'] ;
	

?>

<?php 
if( $feature_switch ==true){
	?>

<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
						<?php 
						
						if($options['features1_icon']){

							?>
							<i class="<?php echo $options['features1_icon']; ?>"></i>
							<?php
						}
						?>
							
						</div>
						<?php 
						if($options['features1_subtitle']){

							?>
							<span><?php echo $options['features1_subtitle'];?></span>
							<?php
						}
						?>
						<?php 
						if($options['features1_title']){

							?>
							<h4 class="mb-3"><?php echo $options['features1_title'];?></h4>
							
							<?php
						}
						?>
						<?php 
						if($options['features1_desc']){

							?>
							<p class="mb-4"><?php echo $options['features1_desc'];?></p>
							
							<?php
						}
						?>
						
						<a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
						<?php 
						
						if($options['features1_icon']){

							?>
							<i class="<?php echo $options['features2_icon']; ?>"></i>
							<?php
						}
						?>
						</div>
						<?php 
						if($options['features2_subtitle']){
							?>
								<span><?php echo $options['features2_subtitle'];?></span>
							<?php
						}
						?>

						<?php 
						if($options['features2_title']){
							?>
							<h4 class="mb-3"><?php echo $options['features2_title'];?></h4>
								
							<?php
						}
						?>
						
						
						<ul class="w-hours list-unstyled">
							<?php 
							$hours=$options['features2_repeater'];

							foreach( $hours as $hour){
								?>
									 <li class="d-flex justify-content-between"><?php echo $hour['hours_1'];?> 
									 <span><?php echo $hour['hours_2'];?> </span></li>
		                   
								<?php
							}
							
							?>
		                    
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
								<?php 
								if($options['feature_icon']){
									?>
									<i class="<?php echo $options['feature_icon'];?>"></i>
									<?php
								}else{
									echo '<i class="fas fa-crow"></i>';
								}
								?>
							
						</div>
						<?php 
						if($options['features3_subtitle']){
							?>
							<span><?php echo $options['features3_subtitle'];?></span>
							<?php
						}
						?>
						
						<?php 
						if($options['features3_title']){
							?>
							<h4 class="mb-3"><?php echo $options['features3_title'];?></h4>
							
							<?php
						}
						?>
						<?php 
						if($options['features3_desc']){
							?>
							
							<p><?php echo $options['features3_desc'];?></p>
							<?php
						}
						?>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<?php
}
?>




