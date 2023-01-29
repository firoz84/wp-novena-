<?php 
/*
Template Name: Home
*/
get_header();
?>
	<?php $options = get_option( 'my_framework' ); ?>
<!--banner sevtion-->
<?php get_template_part('template-parts/Home/home','banner');?>

<!--featured sevtion-->
<?php get_template_part('template-parts/Home/home','feature');?>

<!--about sevtion-->
<?php get_template_part('template-parts/Home/home','about');?>


<!--counter sevtion-->
<?php get_template_part('template-parts/Home/home','counter');?>


<!--services sevtion-->
<?php get_template_part('template-parts/Home/home','service');?>



<!--appoinment sevtion-->
<?php get_template_part('template-parts/Home/home','appoinment');?>



<!--testimonial sevtion-->
<?php get_template_part('template-parts/Home/home','testimonial');?>


<!--clients sevtion-->
<?php get_template_part('template-parts/Home/home','client');?>



<!-- footer Start -->
<?php get_footer();?>

  </body>
  </html>
   