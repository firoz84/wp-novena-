<?php 
/*
Template Name: Defarment page 
*/
get_header();

$options = get_option( 'my_framework' );

$department_ctp_subtitle= $options['department_ctp_subtitle'];
$department_ctp_title= $options['department_ctp_title'];
$department_ctp_her_title= $options['department_ctp_her_title'];
$department_ctp_Description= $options['department_ctp_Description'];

?>
	


<section class="page-title department bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
            <?php 
            if($department_ctp_subtitle){
                ?>
                 <span class="text-white"><?php echo $department_ctp_subtitle;?></span>
                <?php
            }
            ?>
            <?php 
            if($department_ctp_subtitle){
                ?>
                 <h1 class="text-capitalize mb-5 text-lg"><?php echo $department_ctp_title;?></h1>

                <?php
            }
            ?>
         
         
         
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
                    <?php 
                    if($department_ctp_her_title){
                        ?>
                        <h2><?php echo $department_ctp_her_title?></h2>
                        <?php
                    }
                    ?>
					
					<div class="divider mx-auto my-4"></div>
                    <?php 
                    if($department_ctp_Description){
                        ?>
                        	<p><?php echo $department_ctp_Description;?>.</p>
                        <?php
                    }
                    ?>
				
				</div>
			</div>
		</div>

		<div class="row">

        <?php 
        $args = array(
            'post_type' => 'departments',
            'posts_per_page' =>6
           
        );
        $query = new WP_Query( $args );

        if($query->have_posts()){
            while($query->have_posts()) {
                $query->the_post();
                ?>
                    <div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
                    
					 <?php the_post_thumbnail('medium', array('class' => 'img-fluid w-100')); ?>			
                     <div class="content">
						<h4 class="mt-4 mb-2 title-color"><?php the_title();?></h4>
						<p class="mb-4"><?php the_excerpt();?></p>
						<a href="<?php the_permalink();?>" class="read-more">Learn More  <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
                <?php
            }
        }
        
        ?>
			

			
		</div>
	</div>
</section>

<!-- footer Start -->
<?php get_footer();?>