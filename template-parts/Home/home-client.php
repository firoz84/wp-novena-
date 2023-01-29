

<?php $options = get_option( 'my_framework' ); ?>

<section class="section clients">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<?php 
					if($options['Cleint_title']){
						?>
						<h2><?php echo $options['Cleint_title'];?></h2>
						<?php
					}
					?>
					
					<div class="divider mx-auto my-4"></div>
					<?php 
					if($options['Cleint_description']){
						?>
						<p><?php echo $options['Cleint_description'];?>.</p>
						<?php
					}
					?>
					
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row clients-logo">
			<?php 
				$cleints= $options['Cleint_repeater'];

				foreach($cleints as $cleint){
					?>
					<div class="col-lg-2">
				<div class="client-thumb">
					<img src="<?php echo $cleint['Cleint_imge']['url'];?>" alt="" class="img-fluid">
				</div>
			</div>
					<?php

				}
			?>
			
			
		</div>
	</div>
</section>