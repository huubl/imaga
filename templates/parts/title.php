<? use IMAGA\Theme\Extras; ?>

<? if( get_sub_field('title') or get_sub_field('lead') ): ?>

  <div class="row">

    <div class="col-12">

      <? if( get_sub_field('title') ): ?>

        <?= Extras\heading_based_on_length( get_sub_field('title') ); ?>

      <? endif; ?>

      <? if( get_sub_field('lead') ): ?>

        <p class="lead text-muted">
          <? the_sub_field('lead'); ?>
        </p>

      <? endif; ?>

    </div>

  </div>

<? endif; ?>
