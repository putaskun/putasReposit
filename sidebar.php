<!--searchフォーム-->
<div id="search-3" class="widget widget_search"><form role="search" method="get" id="searchform" class="searchform" action="http://localhost:8888/wordpress/">
				<div>
					<label class="screen-reader-text" for="s">Search:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form></div>
<!--/searchフォーム-->




<!--SNSBTN-->
<div class="sidebar-contents-wrap">
<!-- twitterBtn -->
<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world"
  data-size="default" style="vertical-align:top;">
Tweet</a>
<!-- /twitterBtn -->

<!--FB Btn-->
<div class="fb-like" data-href="https://www.facebook.com/StarsSmileyZhuShiHuiShe" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" style="vertical-align:top"></div>
<!--/FB Btn-->

<!-- google+Btn -->
<div class="g-plus" data-action="share" data-annotation="none" data-height="19"></div>
<!-- /google+Btn -->
</div>
<!--/SNSBTN-->




<!--FB-PagePlugin-->
<div class="fb-page" data-href="https://www.facebook.com/StarsSmileyZhuShiHuiShe" data-tabs="timeline" data-width="270" data-height="130" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/StarsSmileyZhuShiHuiShe"><a href="https://www.facebook.com/StarsSmileyZhuShiHuiShe">Stars Smiley 株式会社</a></blockquote></div></div>
<!--/FB-PagePlugin-->

<!--PICK UP-->
<div class="sidebar-contents-wrap">
<h3>PICK UP</h3>
<ul class="sidebar-pickup">
  <?php query_posts('tag=class&showposts=3');?>
  <?php if(have_posts()):while(have_posts()):the_post();?>
    <li>
    <p><?php the_time('Y.m.d');?></p>
    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
    <div class="pickup-thum"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a></div>
    <div class="pickup-content"><a href="<?php the_permalink() ?>"><?php if(mb_strlen($post->post_content)>37) { $content= mb_substr($post->post_content,0,37) ; echo $content. ･･･ ;
} else {echo $post->post_content;}?></a></div>
    </li>
  <?php endwhile;endif;?>
</ul>
</div>
<!--/PICK UP-->

<?php dynamic_sidebar(); ?>



<!--twitter-js-->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<!--/twitter-js-->

<!--google+ js -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>
<!--/google+ js -->

<!--FB js -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--/FB js -->
