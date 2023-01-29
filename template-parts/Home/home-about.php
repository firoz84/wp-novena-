


<?php $options = get_option( 'my_framework' ); 

$about_switcher= $options['about_switch'];

?>

<?php 
if($about_switcher==true){
	?>
	<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				
				<div class="about-img">
					<?php 
					if($options['about_img1']){
						?>
						<img src="<?php echo $options['about_img1']['url'];?>" alt="" class="img-fluid">
						<?php
					}
					?>
					<?php 
					if($options['about_img2']){
						?>
						<img src="<?php echo $options['about_img2']['url'];?>" alt="" class="img-fluid">
						<?php
					}
					?>
					</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
				<?php 
					if($options['about_img2']){
						?>
						<img src="<?php echo $options['about_img3']['url'];?>" alt="" class="img-fluid">
						<?php
					}
					?>
			</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<?php 
					if($options['about_title']){
						?>
						<h2 class="title-color"><?php echo $options['about_title'];?></h2>
						<?php
					}
					?>
					<?php 
					if($options['about_desc']){
						?>
						<p class="mt-4 mb-5"><?php echo $options['about_desc'];?></p>
						
						<?php
					}
					?>
					<a href="<?php echo $options['about_btn']['url'];?>" class="btn btn-main-2 btn-round-full btn-icon"><?php echo $options['about_btn']['text'];?><i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
	<?php
}

?>
