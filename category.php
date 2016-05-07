<?php get_header(); ?>
   <div class="mainphoto imgcate">
     <span class="spImg"</span>
 </div>


 <div class="postwrapper">

   <div class="post-contents">
     <h2><?php the_category(', '); ?></h2>
     <?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>
     <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <ul class="category">
      <li>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php echo get_the_date(); ?> <?php the_time(); ?>
       <div class="entry">
          <div class="cate-thumbox"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a></div>
         <div class="entry_main">
            <a href="<?php the_permalink(); ?>"><?php $text= mb_substr(strip_tags($post-> post_content), 0, 150); echo $text. ''; ?></a>
         </div>
         <!--/div.entry_main-->

         <p class="state">カテゴリー： <?php the_category(', '); ?></p>

       </div>
     </li>
   </ul>
       <!--/div.entry-->



<?php endwhile; ?>
<?php
    // リンクが無い場合はNULLが返ってくる
    $prev_link = get_previous_posts_link('«前の3件');
    $next_link = get_next_posts_link('次の3件»');

    if ( isset( $prev_link ) or isset( $next_link ) ) {
        echo '<ul id="pagination" class="clearfix">', PHP_EOL;
        if( isset( $prev_link ) ) {
            echo '<li id="prevli">',$prev_link,'</li>', PHP_EOL;
        }
        if( isset( $next_link ) ) {
            echo '<li id="nextli">',$next_link,'</li>', PHP_EOL;
        }
        echo '</ul>', PHP_EOL;
    }
?>
<?php endif; ?>



 </div>
 <!--/div.post-contents-->

 <div class="right-sidebar">
   <?php get_sidebar(); ?>
 </div>
 <!--/div.right-sidebar-->

 </div>
 <!--/shinglewrapper-->

 <?php get_footer(); ?>
