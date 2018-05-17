
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
        <<?php $text = get_field( 'text_options', 'options' );
            if( $text ): ?><?php echo $text['sub_heading_tag']; ?>
         class="heading"><?php the_field( 'head_title', 'option' ); ?></<?php echo $text['sub_heading_tag']; ?>  <?php endif; ?> >
        <div class="sub-heading">
          <h3>sub heading</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<h2><?php the_field( 'title_sample' ); ?></h2>
<?php get_footer(); ?>
