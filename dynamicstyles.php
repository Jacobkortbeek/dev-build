<style type="text/css">

  body{
    background-color:<?php if ( get_field( 'background_choice', 'options' ) == 'single_color' ): ?>
     <?php the_field( 'background_colour', 'option' ); ?>;
     <?php elseif ( get_field( 'background_choice', 'options' ) == 'gradient' ): ?>
      linear-gradient(<?php the_field( 'gradient_colour_one' ); ?>, <?php the_field( 'gradient_colour_two' ); ?>, <?php the_field( 'gradient_colour_three' ); ?>, <?php the_field( 'gradient_colour_four' ); ?>);
     <?php endif ;?>
  }



.heading {
  color: <?php echo get_field( 'heading_colour', 'option' ); ?>;
}
</style>
