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
          <h2><?php get_field( 'head_title', 'option' ); ?></h2>
        </div>
      </div>
    </div>
  </header>

  <body>
