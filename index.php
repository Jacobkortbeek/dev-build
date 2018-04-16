<?php get_header(); ?>

<h2>Hello World!</h2>

<div class="container">
  <div class="row">
    <div class="col-md-6 one">
      <div class="cont">
        <p><?php the_field( 'background_choice', 'options' ); ?></p>
      </div>
    </div>
    <div class="col-md-6 two">
      <div class="cont">
        <?php the_field( 'main_heading_colour', 'option' ); ?>
      </div>
    </div>
  </div>
</div>
<h2><?php the_field( 'title_sample' ); ?></h2>
<?php get_footer(); ?>
