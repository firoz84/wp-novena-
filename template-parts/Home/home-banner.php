
<section class="banner">
	<div class="container">
		<div class="row">
		<?php $options = get_option( 'my_framework' ); ?>
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<?php if($options['banner_subtitle']){

						?>
						<span class="text-uppercase text-sm letter-spacing "><?php echo $options['banner_subtitle'];?></span>
					
						<?php
					}?>
					<?php 
					if($options['banner_title']){
						?>
						<h1 class="mb-3 mt-3"><?php echo $options['banner_title'];?></h1>
					
						<?php
					}
					?>

					<?php 
					if($options['banner_desc']){
						?>
						<p class="mb-4 pr-5"><?php echo $options['banner_desc'];?></p>
						<?php
					}
					?>
					
					<div class="btn-container ">
						
						
						<a href="<?php echo $options['btn_link']['url'];?>" target="_blank" class="btn btn-main-2 btn-icon btn-round-full text-white"><?php echo $options['btn_link']['text'];?><i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>