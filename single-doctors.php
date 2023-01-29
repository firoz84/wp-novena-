<?php 

get_header();

$meta = get_post_meta( get_the_ID(), 'novena_doctor_metabox', true );

$doctor_name= $meta['doctor-name'];
$doctor_degisnation= $meta['doctor-degisnation'];
$doctor_single_image= $meta['doctor-single-image']['url'];
$doctor_repeaters= $meta['doctor_repeater'];
$doctor_single_title= $meta['doctor-single-title'];
$doctor_single_desc= $meta['doctor-single-desc'];
$doctor_btn= $meta['doctor_btn'];
$doctor_education_title= $meta['doctor-education-title'];
$doctor_repeateres= $meta['doctor_repeater'];

?>
	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Doctor Details</span>
          <h1 class="text-capitalize mb-5 text-lg"><?php the_title();?></h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Doctor Details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section doctor-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="doctor-img-block">
					<?php 
					if($doctor_single_image){
						?>
							<img src="<?php echo $doctor_single_image;?> " alt=" " class="img-fluid w-100">
						<?php
					}
					?>
					

					<div class="info-block mt-4">
						<?php 
						if($doctor_name){
							?>
							<h4 class="mb-0"><?php echo $doctor_name; ?></h4>
							<?php
						}
						?>
						<?php 
						if($doctor_degisnation){
							?>
							<p><?php echo $doctor_degisnation; ?></p>
						
							<?php
						}
						?>
						
						

						<ul class="list-inline mt-4 doctor-social-links">
							<?php 
							
							foreach($doctor_repeaters as $doctor_repeater){
									?>
										<li class="list-inline-item">
											<a href="#">
												<i class="<?php echo $doctor_repeater['social_icons'];?>"></i>
											</a>
											</li>
									<?php

							}
							
							?>
							
						
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="doctor-details mt-4 mt-lg-0">
					<?php 
					if($doctor_single_title){
						?>
						<h2 class="text-md"><?php echo $doctor_single_title;?></h2>
						<?php
					}
					
					?>
					
					<div class="divider my-4"></div>

					<?php 
					if($doctor_single_desc){
						?>
						<p><?php echo $doctor_single_desc;?></p>
						<?php
					}
					?>
					
					<?php 
					if($doctor_btn){
						
						?>
						
					<a href="<?php echo $doctor_btn['url'];?>" class="btn btn-main-2 btn-round-full mt-3"><?php echo $doctor_btn['text']; ?><i class="icofont-simple-right ml-2  "></i></a>
						<?php
					}
					?>
					

				</div>
			</div>
		</div>
	</div>
</section>

<section class="section doctor-qualification gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title">
					<?php 
					if($doctor_education_title){
						?>
							<h3><?php echo $doctor_education_title;?></h3>
						<?php
					}
					
					?>
					
					<div class="divider my-4"></div>
				</div>
			</div>
		</div>

		<div class="row">
			
					<?php 
					
					foreach($doctor_repeateres as $parent){
						?>
						<div class="col-lg-6">
							<div class="edu-block mb-5">
								<span class="h6 text-muted"><?php echo $parent['education_year']; ?></span>
								<h4 class="mb-3 title-color"><?php echo $parent['education_title']; ?></h4>
								<p><?php echo $parent['education_desc']; ?></p>
							</div>
						</div>

						<?php
					}
					?>

				

				
			</div>

		</div>
	</div>
</section>


<section class="section doctor-skills">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3>My skills</h3>
				<div class="divider my-4"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In architecto voluptatem alias, aspernatur voluptatibus corporis quisquam? Consequuntur, ad, doloribus, doloremque voluptatem at consectetur natus eum ipsam dolorum iste laudantium tenetur.</p>
			</div>
			<div class="col-lg-4">
				<div class="skill-list">
					<h5 class="mb-4">Expertise area</h5>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2"></i>International Drug Database</li>
						<li><i class="icofont-check mr-2"></i>Stretchers and Stretcher Accessories</li>
						<li><i class="icofont-check mr-2"></i>Cushions and Mattresses</li>
						<li><i class="icofont-check mr-2"></i>Cholesterol and lipid tests</li>
						<li><i class="icofont-check mr-2"></i>Critical Care Medicine Specialists</li>
						<li><i class="icofont-check mr-2"></i>Emergency Assistance</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar-widget  gray-bg p-4">
					<h5 class="mb-4">Make Appoinment</h5>

					<ul class="list-unstyled lh-35">
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Monday - Friday</a>
					    <span>9:00 - 17:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Saturday</a>
					    <span>9:00 - 16:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <a href="#">Sunday</a>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3 class="text-color-2">+23-4565-65768</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>