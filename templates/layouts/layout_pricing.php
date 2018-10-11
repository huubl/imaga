<? $package_s = get_sub_field('package_s');?>
<? $package_m = get_sub_field('package_m');?>
<? $package_l = get_sub_field('package_l');?>
<? $package_xl = get_sub_field('package_xl');?>
<section id="section-<?= get_row_index(); ?>" class="layout-pricing">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-10">
        <? if( have_rows('pricing') ): ?>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      <?= $package_s['title'];?>
                    </h3>
                    <small class="text-muted">
                      &euro;<?= $package_s['pricing'];?>
                    </small>
                  </div>
                </th>
                <th scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      <?= $package_m['title'];?>
                    </h3>
                    <small class="text-muted">
                      &euro;<?= $package_m['pricing'];?>
                    </small>
                  </div>
                </th>
                <th scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      <?= $package_l['title'];?>
                    </h3>
                    <small class="text-muted">
                      &euro;<?= $package_l['pricing'];?>
                    </small>
                  </div>
                </th>
                <th scope="col">
                  <div class="text-center">
                    <h3 class="display-3">
                      <?= $package_xl['title'];?>
                    </h3>
                    <small class="text-muted">
                      &euro;<?= $package_xl['pricing'];?>
                    </small>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <? while ( have_rows('pricing') ) : the_row(); ?>
                <tr>
                  <td class="py-3 lead">
                    <? the_sub_field('type');?>
                  </td>
                  <td class="py-3 text-green text-center">
                    <?= (get_sub_field('package_s')) ? do_shortcode('[checkmark]'):'';?>
                  </td>
                  <td class="py-3 text-green text-center">
                    <?= (get_sub_field('package_m')) ? do_shortcode('[checkmark]'):'';?>
                  </td>
                  <td class="py-3 text-green text-center">
                    <?= (get_sub_field('package_l')) ? do_shortcode('[checkmark]'):'';?>
                  </td>
                  <td class="py-3 text-green text-center">
                    <?= (get_sub_field('package_xl')) ? do_shortcode('[checkmark]'):'';?>
                  </td>
                </tr>
              <? endwhile; ?>
              <tr>
                <td class="py-3"></td>
                <td class="py-3 text-center">
                  <a href="<?= $package_s['url'];?>" class="btn btn-blue">Package <?= $package_s['title'];?></a>
                </td>
                <td class="py-3 text-center">
                  <a href="<?= $package_m['url'];?>" class="btn btn-blue">Package <?= $package_m['title'];?></a>
                </td>
                <td class="py-3 text-center">
                  <a href="<?= $package_l['url'];?>" class="btn btn-blue">Package <?= $package_l['title'];?></a>
                </td>
                <td class="py-3 text-center">
                  <a href="<?= $package_xl['url'];?>" class="btn btn-blue">Package <?= $package_xl['title'];?></a>
                </td>
              </tr>
            </tbody>
          </table>
        <? endif; ?>
        <p class="text-muted"><small>* = minimum of 2 months</small></p>
        <p class="text-muted"><small>** = minimum of 3 months</small></p>
      </div>
    </div>
  </div>
</section>
