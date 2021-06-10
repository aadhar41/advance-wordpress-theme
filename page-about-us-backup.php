<?php get_header(); ?>

	<div class="container content">
		<div class="main block">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<article class="page">
						<h2><?php the_title(); ?></h2>
						<div class="well">
							<strong>Company Phone : </strong> 555-555-5555
						</div>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php  
					echo wpautop("Sorry, no post were found.");
				?>
			<?php endif; ?>
		
		</div>

		<div class="side">
			<div class="block">
				<h3>Sidebar Head</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam efficitur lectus nisi, quis sollicitudin justo malesuada in. In pretium ligula vel sem vestibulum laoreet vel maximus dolor. Sed gravida erat a vestibulum congue. Fusce blandit elit lorem, ac malesuada massa ultrices sit amet. Morbi consectetur nunc ac mattis maximus. Etiam hendrerit ornare nisi nec dictum. Proin auctor, leo id dignissim ultricies, nisl justo lacinia ligula, vel bibendum enim orci nec sapien. Vivamus eget quam varius, imperdiet turpis vitae, varius purus. Cras eget vehicula erat. In quis nulla id tellus viverra consectetur. Nulla at leo augue. Etiam aliquam mauris in elementum pretium. Proin tempor massa a mauris ultrices rutrum. Fusce vitae sem ac arcu vestibulum convallis quis id arcu.
				</p>
				<a href="#" class="button">
					More
				</a>
			</div>
		</div>
	</div>
<?php
	get_footer();
?>