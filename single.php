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

          <!--前の記事次の記事へ-->
          <ul id="pagination" class="clearfix">
          <li id="prev_next">
            <?php
            $prevpost = get_adjacent_post(false, '', true); //前の記事
            $nextpost = get_adjacent_post(false, '', false); //次の記事
            if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
            ?>
            <?php
             if ( $prevpost ) { //前の記事が存在しているとき
              echo '<a href="' . get_permalink($prevpost->ID) .'" id="prevli" class="clearfix">
                    <div id="prev_title">«前の記事へ</div><ul class="prevnext clearfix">
                    <li class="pagi-thumbox">' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '</li>
                    <li>' . get_the_title($prevpost->ID) . '</li></ul>
              </a>';
             } else { //前の記事が存在しないとき
             echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
              </div></a></div>';
             }
             if ( $nextpost ) { //次の記事が存在しているとき
              echo '<a href="' . get_permalink($nextpost->ID) .'" id="nextli" class="clearfix">
                    <div id="next_title">次の記事へ»</div><ul class="prevnext clearfix">
                <li class="pagi-thumbox">' . get_the_post_thumbnail($nextpost->ID, array(100,100)).'</li>
            		<li>'. get_the_title($nextpost->ID) . '</li></ul></a>';
             } else { //次の記事が存在しないとき
             echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
             </div></a></div>';
             }
            ?>
            <?php } ?>
          </li>
        </ul>
          <!--/前の記事次の記事へ-->

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
