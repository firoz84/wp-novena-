

<?php  
   $options = get_option( 'my_framework' ); 
   $service_ctp_title = $options['opt-code-editor-1'];
   
   ?>
<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
                    <?php 
                    if( $service_ctp_title){
                        ?>
                        <h2 class="mb-5 text-lg"><?php echo $service_ctp_title;?></h2>
                        <?php
                    }
                    ?>
					<a href="appoinment.html" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>