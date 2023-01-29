
<?php
 $options = get_option( 'my_framework' );
 
 $about_personal= $options['about_Personal_title'];
 $about_personal_desc= $options['about_Personal_desc'];
 $about_personal_single= $options['about_Personal_single'];
 
 ?>

<section class="section about-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<?php 
				if( $about_personal){
					?>
					<h2 class="title-color"><?php echo $about_personal;?></h2>
					<?php
				}
				?>
				
			</div>
			<div class="col-lg-8">
				<?php 
				if( $about_personal_desc){
					?>
					<p><?php echo $about_personal_desc;?></p>
					<?php
				}
				
				?>

				<?php 
				if( $about_personal_single){

					?>
						<img src="<?php echo $about_personal_single['url'];?>" alt="" class="img-fluid">
			
					<?php
				}
				?>
				
			</div>
		</div>
	</div>
</section>