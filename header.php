<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-12 header">
          <?php get_field( 'head_title' ); ?>
          <h2><?php the_field( 'head_title' ); ?></h2>
          <h2><?php the_field( 'title_sample' ); ?></h2> 
        </div>
      </div>
    </div>
  </header>

  <body>
