<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package novena
 */

get_header();
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-5 text-lg"><?php the_title();?></h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>



<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
	<div class="col-lg-12 mb-5">
		<div class="single-blog-item">
		<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>

			<div class="blog-item-content mt-5">
				<div class="blog-item-meta mb-3">
					<span class="text-color-2 text-capitalize mr-3"><i class="icofont-book-mark mr-2"></i><?php the_author(); ?></span>
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i><?php echo get_the_date( 'F Y', get_the_ID() );?></span>
				</div> 

				<h2 class="mb-4 text-md"><a href="blog-single.html"><?php the_title();?></a></h2>

				<?php the_content();?>

				<div class="mt-5 clearfix">
				    <ul class="float-left list-inline tag-option"> 
					<?php
					$posttags = get_the_tags();
					if ($posttags) {
					foreach($posttags as $tag) {
						?>
						<li class="list-inline-item"><a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) );?>"><?php echo $tag->name . ' '; ?></a></li>
						
						<?php
						
					}
			}
			?>

				   	</ul>        

				    <ul class="float-right list-inline">
				        <li class="list-inline-item"> Share: </li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-facebook" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-twitter" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-pinterest" aria-hidden="true"></i></a></li>
				        <li class="list-inline-item"><a href="#" target="_blank"><i class="icofont-linkedin" aria-hidden="true"></i></a></li>
				    </ul>
			    </div>
			</div>
		</div>
	</div>




	<div class="col-lg-12">
	<?php 
	if (comments_open()){
		comments_template();
	}
	
	?>
	</div>
</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
	<div class="sidebar-widget search  mb-3 ">
		<h5>Search Here</h5>
		<form action="#" class="search-form">
			<?php get_search_form(); ?>
			
			
		</form>
	</div>


	<div class="sidebar-widget latest-post mb-3">
		<h5>Popular Posts</h5>

        <?php 
				$args= array(
					'post_type' => 'post',
					'posts_per_page'=> 3,
				);
				$query=new WP_Query($args);

			if($query->have_posts()) {
				while($query->have_posts()) {
					$query->the_post();
					?>
				<div class="py-2">
					<span class="text-sm text-muted"><?php echo get_the_date( 'F Y', get_the_ID() );?></span>
					<h6 class="my-2"><a href="#"><?php the_title();?></a></h6>
				</div>
					<?php
				}
			}
				?>
	</div>

	<div class="sidebar-widget category mb-3">
		<h5 class="mb-4">Categories</h5>

		<ul class="list-unstyled">
		<?php 
		foreach((get_the_category()) as $category){
		?>
		 <li class="align-items-center">
		    <a href="#"><?php echo $category->name; ?></a>
		    <span>(14)</span>
		  </li>
		<?php
		
		}
	?>
		</ul>
	</div>


	<div class="sidebar-widget tags mb-3">
		<h5 class="mb-4">Tags</h5>
		<?php
			$posttags = get_the_tags();
			if ($posttags) {
			foreach($posttags as $tag) {
				?>
				<a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) );?>"><?php echo $tag->name . ' '; ?></a>
				<?php
				
			}
			}
			?>

	</div>


	<div class="sidebar-widget schedule-widget mb-3">
		<h5 class="mb-4">Time Schedule</h5>

		<ul class="list-unstyled">
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
			<h3>+23-4565-65768</h3>
		</div>
	</div>

</div>
            </div>   
        </div>
    </div>
</section>

<?php

get_footer();
