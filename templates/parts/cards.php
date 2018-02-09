<section class="cards">

	<div class="container">

    <?php get_template_part('templates/globals/title'); ?>

		<?php if( have_rows('items') ): ?>

			<div class="row card-deck">

				<?php  while( have_rows('items') ) : the_row(); ?>

					<?php get_template_part('templates/parts/cards','item'); ?>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>

</section>
