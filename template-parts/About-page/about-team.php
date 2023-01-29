

<?php 
  $options = get_option( 'my_framework' );

  $about_teams= $options['team_repeater'];

?>

<section class="fetaure-page ">
	<div class="container">
		<div class="row">

		<?php 
			foreach($about_teams as $about_team){
				?>
				<div class="col-lg-3 col-md-6">
				<div class="about-block-item mb-5 mb-lg-0">
					<img src="<?php echo $about_team['team_imae']['url'];?>" alt="" class="img-fluid w-100">
					<h4 class="mt-3"><?php echo $about_team['team_title'];?></h4>
					<p><?php echo $about_team['team_desc'];?></p>
				</div>
			</div>
				<?php

			}
		?>
			
			
		</div>
	</div>
</section>