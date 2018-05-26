<?php get_header(); ?>

<div class="container hero">
  <div class="row">
    <div class="col-md-12 logo-hero">
      <?php $band_logo = get_field( 'band_logo', 'options' ); ?>
      <?php if ( $band_logo ) { ?>
         <img src="<?php echo $band_logo['url']; ?>" alt="<?php echo $band_logo['alt']; ?>" />
      <?php } ?>
    </div>
    <div class="col-md-12">
      <<?php $text = get_field( 'text_options', 'options' );
          if( $text ): ?><?php echo $text['heading_h_tag']; ?>
       class="heading"><?php the_field( 'head_title', 'option' ); ?></<?php echo $text['heading_h_tag']; ?>  <?php endif; ?> >
    </div>
  </div>
</div>

<div class="container aboutUs">
  <div class="row">
    <div class="col-md-12">
      <?php $aboutHeader = get_field( 'about_section_heading' );
        if( $aboutHeader ): ?><<?php echo the_field( 'sub_heading_font_size', 'options' ); ?>>
        <?php the_field( 'about_section_heading' ) ?>
        </<?php echo the_field( 'sub_heading_font_size', 'option' ); ?>>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
