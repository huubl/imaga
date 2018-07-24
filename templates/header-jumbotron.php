<? $image_alignment = get_field('header_toggle'); ?>

<div class="jumbotron jumbotron-fluid bg-white overflow-hidden mb-0 py-0">
  <div class="container">

    <div class="row">
      <? if( $image_alignment == 'bg-left' ): ?>
        <div class="col-6"></div>
        <? $padding = "pl-md-5"; ?>
      <? else: ?>
        <? $padding = "pr-md-5"; ?>
      <? endif; ?>

      <div class="col-12 col-md-6 <?= $padding; ?>">
        <h1 class="display-1 mb-4"><? the_field('title'); ?></h1>
        <p class="lead mb-5"><? the_field('lead'); ?></p>
      </div>
      <a class="scroll-arrow bg-yellow" href="#conversions"><i class="fa fa-chevron-down"></i></a>
    </div>


    <div class="bg-container <?= $image_alignment; ?> bg-cover bg-center" style="background-image: url('<? the_post_thumbnail_url(); ?>');"></div>
  </div>
</div>
