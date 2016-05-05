 <?php get_header(); ?>
 		<div class="mainphoto imgsingle">
      <span class="spImg"</span>
  </div>


  <div class="postwrapper">

    <div class="post-contents">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <ul class="postype">
        <li>
        <div class="entry">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="state"><?php echo get_the_date(); ?> <?php the_time(); ?>　　カテゴリー： <?php the_category(', '); ?></p>
          </p>
          <div class="cate-thumbox"><?php the_post_thumbnail() ?></div>
          <div class="entry_main">
            <?php the_content(); ?>
            <ul id="pagination" class="clearfix">
              <li id="prevli">
                <?php previous_post_link(); ?>
                <?php the_post_thumbnail() ?>
              </li>
              <li id="nextli">
                <?php next_post_link(); ?>
                <?php the_post_thumbnail() ?>
              </li>
            </ul>
          </div>
          <!--/div.entry_main-->

        </div>
        <!--/div.entry-->
      </li>
    </ul>
  <?php endwhile; endif; ?>

  </div>
  <!--/div.post-contents-->

  <div class="right-sidebar">
    <?php get_sidebar(); ?>
  </div>
  <!--/div.right-sidebar-->

  </div>
  <!--/shinglewrapper-->

  <?php get_footer(); ?>
