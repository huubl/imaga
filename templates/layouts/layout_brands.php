<? use IMAGA\Theme\Extras; ?>

<section id="section-<?= get_row_index(); ?>" class="layout-brands">
  <div class="container">
    <div class="row">
      <div class="col-12 text-md-center">
        <h4>You’re in good company. We're trusted by agencies and smart companies such as:</h4>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">

        <? Extras\the_brands( get_field('brands') ); ?>

      </div>
    </div>
  </div>
</section>
