<div class="card card-shadow">

  <div class="card-body">

    <? if( get_sub_field('title') ): ?>
      <h5 class="card-title">
        <? the_sub_field('title'); ?>
      </h5>
    <? endif; ?>

    <? if( get_sub_field('lead') ): ?>
      <h6 class="card-subtitle text-muted">
        <? the_sub_field('lead'); ?>
      </h6>
    <? endif; ?>

    <? if( get_sub_field('content') ): ?>
      <div class="card-text">
        <? the_sub_field('content'); ?>
      </div>
    <? endif; ?>

  </div>

</div>
