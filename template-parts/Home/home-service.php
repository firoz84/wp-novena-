
<?php $options = get_option( 'my_framework' ); ?>

<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">

				<?php 
				if($options['service_title']){
					?>
					<h2><?php echo $options['service_title'];?></h2>
					<?php
				}
				?>
					
					<div class="divider mx-auto my-4"></div>
					<?php 
					if($options['service_description']){
						?>
						<p><?php echo $options['service_description'];?></p>
						<?php
					}
					?>
					
				</div>
			</div>
		</div>

		<div class="row">

		<?php 
		$services=$options['service_repeater'];

		foreach($services as $service){
			?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-item mb-4">
					<div class="icon d-flex align-items-center">
						<i class="<?php echo $service['service_icon'];?> text-lg"></i>
						<h4 class="mt-3 mb-3"><?php echo $service['service_item_title'];?></h4>
					</div>

					<div class="content">
						<p class="mb-4"><?php echo $service['service_item_description'];?></p>
					</div>
				</div>
			</div>
			<?php
		}
		
		?>
			

			
		</div>
	</div>
</section>