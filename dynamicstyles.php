<style type="text/css">
<?php if ( get_field( 'background_choice', 'options' ) == 'Single Colour' ): ?>
  .body{
    background-color: <?php the_field( 'background_colour', 'option' ); ?>;
  }
  <?php else : ?>
  .body{
    background-color: red;
  }
<?php endif ;?>

.heading {
  color: <?php echo get_field( 'heading_colour', 'option' ); ?>;
}
</style>
