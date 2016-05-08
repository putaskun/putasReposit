<?php get_header(); ?>
   <div class="mainphoto imgsingle">
     <span class="spImg"</span>
 </div>


 <div class="postwrapper">




     <?php if(have_posts()): while(have_posts()): the_post(); ?>


         <div class="page-contents">
           <h1 class="page-title"><?php the_title(); ?></h1>
           <?php the_content(); ?></div> <!--/div.page-contents-->


           <?php endwhile;
         endif;
         ?>

         <div class="right-sidebar">
           <?php get_sidebar(); ?>
         </div>
         <!--/div.right-sidebar-->


 </div>
 <!--/postwrapper-->
<?php get_footer(); ?>
