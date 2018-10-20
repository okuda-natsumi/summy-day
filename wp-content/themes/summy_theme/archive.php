<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div class="main_wrap">
  <div class="main">
    <section id="news">
      <h1 class="section_title">
        NEWS
			</h1>
      <div class="section_content">
        <div class="news_list">
					<?php if(have_posts()):?>
						<?php while(have_posts()):the_post();?>
							<div class="list_item">
								<div class="list_date">
									<?php echo get_the_date( 'Y.m.d' ); ?>
								</div>
								<div class="list_title">
									<h3 class="title">
										<a href="<?php the_permalink(); ?>"><?php echo the_title();?></a>
									</h3>
									<div class="description">
										<?php the_excerpt(); ?>
									</div>
								</div>
							</div>
						<?php endwhile;?>
							<div id="pager_navigation">
								<?php posts_nav_link( '　', '<i class="fa fa-angle-left icon-left"></i>PREV', 'NEXT<i class="fa fa-angle-right icon-right"></i>' ); ?>
							</div>
					<?php endif;?>
        </div>
      </div>
		</section>
	</div>
</div>

<?php get_footer(); ?>
