<?php 
/*
Template Name: Doctors
*/
get_header();

$options = get_option( 'my_framework' );


$doctor_subtitle= $options['doctor_subtitle'];
$doctor_title= $options['doctor_title'];
$doctor_heading= $options['doctor_heading'];

$doctor_subheading= $options['doctor_subheading'];


?>
	
	<section class="page-title doctorsbrede bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
			<?php 
			if($doctor_subtitle){
				?>
				<span class="text-white"><?php echo $doctor_subtitle; ?></span>
				<?php
			}
			?>
			<?php 
			if($doctor_title){
				?>
				<h1 class="text-capitalize mb-5 text-lg"><?php echo $doctor_title; ?></h1>
				
				<?php
			}
			?>
          
          

      
        </div>
      </div>
    </div>
  </div>
</section>


<!-- portfolio -->
<section class="section doctors">
  <div class="container">
  	  <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                <div class="section-title">
					<?php 
					if($doctor_heading){
						?>
						<h2><?php echo $doctor_heading;?></h2>
						<?php
					}
					?>
					 <div class="divider mx-auto my-4"></div>
					<?php 
					if($doctor_subheading){
						?>
						 <p><?php echo $doctor_subheading;?></p>
						<?php
					}
					?>
                    
                   
                   
                </div>
            </div>
        </div>

      <div class="col-12 text-center  mb-5">
	        <div class="btn-group btn-group-toggle " data-toggle="buttons">
	          <label class="btn active ">
	            <input type="radio" name="shuffle-filter" value="all" checked="checked" />All Department
	          </label>

			  <?php 
			  $cate_gorys=get_terms('catagorise');
			 foreach($cate_gorys as $cate){
				?>
					   <label class="btn ">
	            <input type="radio" name="shuffle-filter" value="<?php echo $cate->slug;?>" /><?php echo $cate->name;?>
	          </label>
				<?php
			 }
			  ?>
	       
	          
	        </div>
      </div>

    <div class="row shuffle-wrapper portfolio-gallery">

	<?php 
		$args=array(
			'post_type' => 'doctors',
			'posts_per_page' =>10
		);
		$query=new WP_query($args);
		while($query->have_posts()){
			$query->the_post();
			?>
			<div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item" data-groups="<?php 
				$port_cat=get_the_terms(get_the_ID(),'catagorise');

				foreach($port_cat as $cat){
					
					echo $cat->slug.' ';
				}
			?>">
			
	      	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
	               <div class="doctor-img">
				   <?php the_post_thumbnail(); ?>
	               		
	               </div>
	            </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                	<?php the_excerpt();?>
                </div> 
	      	</div>
      	</div>
			<?php
		}
	?>
      	

  </div>
</section>
<!-- /portfolio -->
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- footer Start -->
<?php get_footer();?>