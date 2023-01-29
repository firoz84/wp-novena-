<?php 

get_header();

$meta = get_post_meta( get_the_ID(), 'novena_metabox', true );
$depart_single_image= $meta['depart-single-image']['url'];
$depart_single_title= $meta['depart-single-title'];
$depart_subtitle= $meta['depart-subtitle'];
$depart_desc= $meta['depart-desc'];
$depart_single_title= $meta['depart-single-title'];
$doctor_services= $meta['doctor_service'];
$depart_shedule= $meta['depart-shedule-title'];
$doctor_Tchedules= $meta['doctor_Tchedule'];
$depart_shedule_text= $meta['depart-shedule-text'];
$depart_shedule_phone= $meta['depart-shedule-phone'];
?>


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Department Details</span>
          <h1 class="text-capitalize mb-5 text-lg"><?php the_title();?></h1>

         
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
                   <?php 
                   if($depart_single_image){
                    ?>
                    <img src="<?php echo $depart_single_image;?>" alt="" class="img-fluid">
                    <?php
                   }
                   ?>
					
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
                    <?php 
                    if($depart_single_title){
                        ?>
                        <h3 class="text-md"><?php echo $depart_single_title; ?></h3>
                        <?php
                    }
                    ?>
					
					<div class="divider my-4"></div>
                    <?php 
                        if($depart_subtitle){
                            ?>
                            <p class="lead"><?php echo $depart_subtitle;?></p>
                            <?php
                        }
                    ?>
                    <?php 
                        if($depart_subtitle){
                            ?>
                            <p><?php echo $depart_desc;?></p>
                            <?php
                        }
                    ?>
					
					<?php
                    if($depart_single_title){
                        ?>
                        <h3 class="mt-5 mb-4"><?php echo $depart_single_title;?></h3>

                        <?php
                    }
                    ?>
					
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
                        <?php 
                        foreach( $doctor_services as $doctor_service){
                            ?>
                            <li><i class="icofont-check mr-2"></i><?php echo $doctor_service['service_features'];?></li>
						
                            <?php
                        }
                        
                        ?>
					
					</ul>

					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
                    <?php 
                    if($depart_shedule){
                        ?>
                        <h5 class="mb-4"><?php echo $depart_shedule; ?></h5>
                        <?php
                    }
                    ?>
					

					<ul class="list-unstyled">
                        <?php 
                        foreach($doctor_Tchedules as $doctor_Tchedule){
                            ?>
                             <li class="d-flex justify-content-between align-items-center">
					    <a href="#"><?php echo $doctor_Tchedule['Doctor_shedule'];?></a>
					    <span><?php echo $doctor_Tchedule['Doctor_time'];?></span>
					  </li>
                            <?php
                        }
                        ?>
					 
					  
					</ul>

					<div class="sidebar-contatct-info mt-4">
                        <?php 
                        if($depart_shedule_text){
                            ?>
                            <p class="mb-0"><?php echo $depart_shedule_text;?></p>
                            <?php
                        }
                        ?>
                        <?php 
                        if($depart_shedule_text){
                            ?>
                           <h3><?php echo $depart_shedule_phone;?></h3>
                            <?php
                        }
                        ?>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>