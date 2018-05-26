<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <?php include ('dynamicstyles.php'); ?>
  </head>
  <header>
    <div class="container">
      <div class="row header boxShadow">
        <div class="col-md-4 logo-header">

              <?php $band_logo = get_field( 'band_logo', 'options' ); ?>
              <?php if ( $band_logo ) { ?>
	               <img src="<?php echo $band_logo['url']; ?>" alt="<?php echo $band_logo['alt']; ?>" />
              <?php } ?>

        </div>
        <div class="col-md-8">
          <<?php $text = get_field( 'text_options', 'options' );
              if( $text ): ?><?php echo $text['heading_h_tag']; ?>
           class="heading"><?php the_field( 'head_title', 'option' ); ?></<?php echo $text['heading_h_tag']; ?>  <?php endif; ?> >
        </div>
      </div>
    </div>
  </header>

  <body>
