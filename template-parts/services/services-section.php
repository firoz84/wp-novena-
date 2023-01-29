<?php   

    $options = get_option( 'my_framework' ); 
    $doctor_services= $options['doctor_service'];

?>

<section class="section service-2">
	<div class="container">
		<div class="row">
            <?php 
            foreach($doctor_services as $service){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<img src="<?php echo $service['service_imge']['url'];?>" alt="" class="img-fluid">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color"><?php echo $service['service_title'];?></h4>
						<p class="mb-4"><?php echo $service['service_desc'];?></p>
					</div>
				</div>
			</div>
                <?php
            }
            
            ?>
			

		</div>
	</div>
</section>