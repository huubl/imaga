<?php
$background = function($has_post_thumbnail){
    if($has_post_thumbnail):
        $url = get_the_post_thumbnail_url();
        return 'style="background-image: url('.$url.');min-height:380px;"';
    endif;
    return;
};
// Bedoeling is dat je op elke pagina een Jumbotron kan plaatsen.
$jumbotron = get_field('jumbotron');
?>

<section class="jumbotron jumbotron-fluid m-0 p-0 bg-center" <?php echo $background( has_post_thumbnail() ); ?>>

	<?php if( $jumbotron['title'] or $jumbotron['lead'] or $jumbotron['cta']): ?>

    <div class="container">

  		<div class="row py-5">

  			<div class="col-12 py-5">

  				<?php if( $jumbotron['title'] ): ?>

  					<h1 class="jumbotron-heading display-3 text-white">
  						<?php echo $jumbotron['title']; ?>
  					</h1>

  				<?php endif; ?>

  				<?php if( $jumbotron['lead'] ): ?>

  					<div class="lead text-white">
  						<?php echo $jumbotron['lead'];?>
  					</div>

  				<?php endif; ?>

  				<?php if( $jumbotron['cta'] ): ?>

  					<div>
  						<?php foreach($jumbotron["cta"] as $cta ) :?>

  							<?php $color = ($cta['color']) ? "btn-" . $cta['color'] : "btn-primary"; ?>

  							<a href="<?php echo $cta['url']; ?>" class="btn <?php echo $color; ?>"><?php echo $cta['label'] ?></a>

  						<?php endforeach; ?>
  					</div>

  				<?php endif; ?>

  			</div>

  		<?php endif; ?>

  	</div>

  </div>

</section>

<div class="jumbotron jumbotron-fluid p-0">
  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide py-5" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <?php foreach($obj as $item): ?>
          <?php get_template_part('templates/sections/jumbotron','carousel-item'); ?>
        <?php endforeach; ?>
      </div>
    </div>


  </div>
</div>
