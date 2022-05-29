<?php
get_header();


if ( have_posts() ) :
	
	while ( have_posts() ) :
		the_post();
		?>

		<article <?php post_class(); ?>>
		<article>
		<div class="container pt-3" >
			<div class="card-deck mb-5">
				<div class="card">
				<img class="card-img-top mt-3" ><?php the_post_thumbnail() ?></img>
					<div class="card-body">
						<h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title( '<h4>', '</h4>' ); ?></a></h5>
						<p class="card-text"><?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?></p>

					</div>
					<div class="card-footer">
							<p class="card-text"><small class="text-muted"><?php the_date() ?></small></p>
						</div>
					</div>
				</div>
			</div>

		</div>
		</article>
		
		
		<?php
	endwhile;
else :
	?>
<?php
endif;

get_footer();

?>