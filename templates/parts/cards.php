<section class="cards">

	<div class="container">

    <? get_template_part('templates/globals/title'); ?>

		<? if( have_rows('items') ): ?>

			<div class="row card-deck">

				<?  while( have_rows('items') ) : the_row(); ?>

					<? get_template_part('templates/parts/cards','item'); ?>

				<? endwhile; ?>

			</div>

		<? endif; ?>

	</div>

</section>
