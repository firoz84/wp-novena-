
<?php 

    $options = get_option( 'my_framework' );

    $about_achivement_title= $options['about_achivement_title'];
    $doctor_achivements=$options['doctor_achivement'];
    
 ?>

<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
                <?php 
                if($about_achivement_title){
                    ?>
                    <h2 class="title-color"><?php echo $about_achivement_title; ?></h2>
                    <?php
                }
                ?>
				
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
                    <?php 
                    foreach($doctor_achivements as $patient){
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
						<div class="award-img">
							<img src="<?php echo $patient['doctor_achivement_imge']['url'];?>" alt="" class="img-fluid">
						</div>
					</div>
                        <?php
                    }
                    
                    ?>
					
					
				</div>
			</div>
		</div>
	</div>
</section>