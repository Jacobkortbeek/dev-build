<style type="text/css">

  body{
    background:
    <?php if ( get_field( 'background_choice', 'options' ) == 'single_color' ): ?>
     <?php the_field( 'background_colour', 'option' ); ?>;
    <?php elseif ( get_field( 'background_choice', 'options' ) == 'gradient' ): ?>
      linear-gradient(
      <?php if ( get_field( 'number_of_colours_in_gradient', 'option' ) == 'four' ) : ?>
        <?php the_field( 'gradient_colour_one', 'option' ); ?>, <?php the_field( 'gradient_colour_two', 'option' ); ?>, <?php the_field( 'gradient_colour_three', 'option' ); ?>, <?php the_field( 'gradient_colour_four', 'option' ); ?>);
      <?php endif; ?>

      <?php if ( get_field( 'number_of_colours_in_gradient', 'option' ) == 'three' ) : ?>
        <?php the_field( 'gradient_colour_one', 'option' ); ?>, <?php the_field( 'gradient_colour_two', 'option' ); ?>, <?php the_field( 'gradient_colour_three', 'option' ); ?>);
      <?php endif; ?>

      <?php if ( get_field( 'number_of_colours_in_gradient', 'option' ) == 'two' ) : ?>
        <?php the_field( 'gradient_colour_one', 'option' ); ?>, <?php the_field( 'gradient_colour_two', 'option' );?>);
      <?php endif; ?>

     <?php endif ;?>
     background-repeat: no-repeat;
  }



.heading {
  padding: 20px;
  <?php
    $text = get_field( 'text_options', 'options' );
    if( $text ): ?>
    color:<?php echo $text['main_heading_colour']; ?>;
  <?php endif; ?>
}
</style>
