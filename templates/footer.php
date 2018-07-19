<? use IMAGA\Theme\Navigation; ?>
<? use IMAGA\Theme\Assets; ?>
<? use IMAGA\Theme\Extras; ?>

<footer class="bg-gray-800 text-gray-500">
  <div class="container">
    <div class="row pb-md-3">
      <div class="col-12">
        <span class="mr-3">Follow us on:</span>
        <a class="text-gray-400  mr-3" href="https://www.facebook.com/imaga.nl" title="IMAGA on Facebook"><span class="fa fa-facebook-square"></span></a>
        <a class="text-gray-400" href="https://nl.linkedin.com/in/marcokramer" title="IMAGA on Linkedin"><span class="fa fa-linkedin-square"></span></a>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12 col-md-4 py-3">
        <img class="img-fluid mb-4" src="<?= Assets\asset_path('images/brand-full-white.png'); ?>" alt="IMAGA" width="200">
        <ul class="list-unstyled m-0">
          <li class="list-item py-1">About Us</li>
          <li class="list-item py-1">Contact</li>
        </ul>
      </div>
      <div class="col-12 col-md-3 py-3">
        <h5 class="lead text-light mb-3">Conversion Optimization</h5>
        <ul class="list-unstyled m-0">
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-research" class="text-gray-500">
              Conversion Research
            </a>
          </li>
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-strategy" class="text-gray-500">
              Conversion Strategy
            </a>
          </li>
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-design" class="text-gray-500">
              Conversion Design
            </a>
          </li>
          <li class="list-item py-1">
            <a href="/conversion-optimization/conversion-build" class="text-gray-500">
              Conversion Build
            </a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-md-5 py-3">
        <h5 class="lead text-light mb-3">Articles</h5>
        <ul class="list-unstyled m-0">
          <? Extras\recent_posts(4); ?>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <span class="mr-4">
          <small>&copy; IMAGA 2018, All rights reserverd.</small>
        </span>
        <?= Navigation\navigation_inline( "footer_navigation", "footer_navigation" ); ?>
      </div>
    </div>
  </div>
</footer>
