
<?php
   $options = get_option( 'my_framework' ); 

   $about_doctor_title= $options['about_doctor_title'];
   $about_doctor_desc= $options['about_doctor_desc'];
   $doctor_repeators= $options['doctor_repeator'];
 
 ?>


<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
                    <?php 
                    if( $about_doctor_title){
                        ?>
                        <h2 class="mb-4"><?php echo $about_doctor_title;?></h2>
                        <?php
                    }
                    ?>
					
					<div class="divider mx-auto my-4"></div>
                    <?php 
                    if( $about_doctor_desc){
                        ?>
                        <p><?php echo $about_doctor_desc;?></p>
                        <?php
                    }
                    ?>
					
				</div>
			</div>
		</div>

		<div class="row">
            <?php 
            foreach($doctor_repeators as $doctor){
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="<?php echo $doctor['doctor_imge']['url'];?>" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="doctor-single.html"><?php echo $doctor['doctor_name'];?></a></h4>
						<p><?php echo $doctor['doctor_degn'];?></p>
					</div>
				</div>
			</div>
                <?php
            }
            
            ?>
			
		</div>
	</div>
</section>