<?php use IMAGA\Theme\Navigation; ?>
<?php use IMAGA\Theme\Assets; ?>

<footer class="bg-gray-900 text-gray-500">
  <div class="container py-5">
    <div class="row pb-3">
      <div class="col-12">
        <span class="mr-4">Follow us on:</span>
        <a class="text-gray-400  mr-4" href="https://www.facebook.com/imaga.nl" title="IMAGA on Facebook">
          <span class="fa fa-facebook-square"></span>
        </a>
        <a class="text-gray-400" href="https://nl.linkedin.com/in/marcokramer" title="IMAGA on Linkedin">
          <span class="fa fa-linkedin-square"></span>
        </a>
      </div>
    </div>
    <hr>
    <div class="row py-3">
      <div class="col-4">
        <img class="img-fluid mb-4" src="<?php echo Assets\asset_path('images/brand-full-white.png'); ?>" alt="IMAGA" width="200">
        <ul class="list-unstyled m-0">
          <li class="list-item py-1">About Us</li>
          <li class="list-item py-1">Contact</li>
        </ul>
      </div>
      <div class="col-3">
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
      <div class="col-5">
        <h5 class="lead text-light mb-3">Articles</h5>
        <ul class="list-unstyled m-0">
          <li class="list-item py-1">
            <a href="#article" class="text-gray-500">
              The big impact of minified files
            </a>
            <span class="badge badge-info">NEW</span>
          </li>
          <li class="list-item py-1">
            <a href="#article" class="text-gray-500">
              How to handle clients you don't want
            </a>
          </li>
          <li class="list-item py-1">
            <a href="#article" class="text-gray-500">
              Fuck you, pay me!
            </a>
          </li>
          <li class="list-item py-1">
            <a href="#article" class="text-gray-500">
              WordPress Trick #17: Menu Nesting
            </a>
          </li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <small>
          <span class="mr-4">&copy; IMAGA 2018, All rights reserverd.</span>
          <a href="#privacy" class="text-light mr-3">Privacy</a>
          <a href="#DPA" class="text-light mr-3">DPA</a>
          <a href="#terms" class="text-light mr-3">Terms</a>
          <a href="#disclaimer" class="text-light">Disclaimer</a>
        </small>
      </div>
    </div>
  </div>
</footer>
