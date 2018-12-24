<?php get_header(); ?>
<div class="main_wrap">
  <div class="main">
    <?php if(have_posts()): the_post(); ?>
    <article class="entry">
      <div class="entry_header">
        <span class="date"><?php echo get_the_date(); ?></span>
        <h1 class="entry_title"><?php the_title(); ?></h1>
        <?php echo get_post_type_archive_link( '***' ); ?>
      </div>
      <?php if( has_post_thumbnail() ): ?>
      <div class="article_image">
        <?php the_post_thumbnail( 'large' ); ?>
      </div>
      <?php endif; ?>
      <div class="entry_content">
        <?php the_content(); ?>
      </div>
      <div class="nav-page">
        <span class="nav-prev"><?php previous_post_link('%link', '>'); ?></span>
        <span class="nav-next"><?php next_post_link('%link', '<'); ?></span>
      </div>
    </article>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
