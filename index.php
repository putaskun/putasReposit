 <?php get_header(); ?>


<!--<ul class="box__area">
  <li class="box box__bg_photo">
    <p>aaa</p>
    <p>bbb</p>
  </div>
  <li class="box box__bg_photo2">
    <p>aaa</p>
    <p>bbb</p>
  </div>
  <li class="box box__bg_photo3">
    <p>aaa</p>
    <p>bbb</p>
  </li>
</ul>-->


<ul class="cb-slideshow">
		<li><span class="spImg">Image 01</span><div><h3>チアで世界に通用する力を手に入れる！<br><span class="spFont">GLOBAL CHEER LEEDING</span></h3></div></li>
		<li><span class="spImg">Image 02</span><div><h3>チアで世界に通用する力を手に入れる！<br><span class="spFont">GLOBAL CHEER LEEDING</span></h3></div></li>
		<li><span class="spImg">Image 03</span><div><h3>チアで世界に通用する力を手に入れる！<br><span class="spFont">GLOBAL CHEER LEEDING</span></h3></div></li>
</ul>



<div class="wrapper">

<!--about-->
		<div class="about">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_green.png"><p>グローバルチアについて<br><span>ABOUT</span><p></h2>
			<ul class="clearfix">
				<li><span class="kiso"><i class="fa fa-globe"></i><br>基礎体力</span></li>
				<li><span class="hyogen">2<br>表現力</span></li>
				<li><span class="houshi">3<br>奉仕の精神</span></li>
			</ul>

			<p>Starssmileyのチアダンススクールは、世界で通用する力を手に入れるプログラムを用意しています！
				英語を活用したダンス指導のほか、基礎体力・表現・奉仕の精神を柱に、踊っている自分自身も、
				見ている人も笑顔で元気にするダンスを目指しています！
			</p>
		</div>
<!--/about-->

<!--about6-->
		<div class="about6">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_cream.png"></p><p>グローバルチアで身につく6つのこと<br><span>ABOUT</span></p></h2>
			<p class="about6P">外見だけでなく、内面も磨いて、世界で通用する女性を目指しましょう！</p>
			<ul class="clearfix">
				<li><p class="reigi"><span>1<br>礼儀</span></p><p><img src="<?php echo get_template_directory_uri(); ?>/images/6photo.png"></p><p>元気な挨拶・感謝の気持ちを言葉で伝える、先生の話をよく聞く</p></li>
				<li><p class="sekkyokusei"><span>2<br>積極性</span></p><p><img src="<?php echo get_template_directory_uri(); ?>/images/6photo.png"></p><p>笑顔で人前に立つ、ダンスを披露する、仲間同士で意見を言い合う</p></li>
				<li><p class="kyouchosei"><span>3<br>協調性</span></p><p><img src="<?php echo get_template_directory_uri(); ?>/images/6photo.png"></p><p>ダンスを揃える、仲間を協力しあってダンスを作り上げる</p></li>
			</ul>
			<ul class="clearfix">
				<li><p class="syucyuryoku"><span>4<br>集中力</span></p><p><img src="<?php echo get_template_directory_uri(); ?>/images/6photo.png"></p><p>1時間のレッスンを集中して受ける、2分半のダンスを覚える</p></li>
				<li><p class="hyogenryoku"><span>5<br>表現力<br>(プレゼンテーション力)</span></p><p><img src="<?php echo get_template_directory_uri(); ?>/images/6photo.png"></p><p>あああああああああああああ</p></li>
				<li><p class="taseikan"><span>6<br>達成感</p><p><img src="<?php echo get_template_directory_uri(); ?>/images/6photo.png"></span></p><p>目標にむかって努力する、評価を受け止めてステップアップしていく</p></li>
			</ul>

			<p>Starssmileyのチアダンススクールは、世界で通用する力を手に入れるプログラムを用意しています！
				英語を活用したダンス指導のほか、基礎体力・表現・奉仕の精神を柱に、踊っている自分自身も、
				見ている人も笑顔で元気にするダンスを目指しています！
			</p>
		</div>
<!--/about6-->


<!--uematsu code-->
	                    <section id="news">
                    <header class="secHeader">
                            <h1><img src="<?php bloginfo('template_url'); ?>/imgs/top_b2_h1.gif" alt="新着ニュース" width="142" height="27"/></h1>
                        </header>
            
                        <div id="newsList" class="linkList">
                           <ul>
<?php
/*----- newsカテゴリ id=3の最新3件を表示 -----*/
$arrNewsPosts= query_posts( array(
'post_type'=> 'post',
'post_status'=> 'publish',
'showposts'=> 20,
'category_name'=> 'news',
'order'=> 'DESC',
'orderby'=> 'date'
));

$intMax= count($arrNewsPosts);

$flgLoop= 0;
$flgLoopMax= 0;
for( $i=0; $i<$intMax; $i++ ){

$varNewsPost= $arrNewsPosts[$i];

//url
$strUrl= null;
if( get_post_meta( $varNewsPost->ID, 'newsUrl', true ) ){
$strUrl= get_post_meta( $varNewsPost->ID, 'newsUrl', true );
}
else {
$strUrl= get_permalink( $varNewsPost->ID );
}

//title
$strTitle= $varNewsPost->post_title;

//date
$strDate= get_the_time( 'Y.m.d' , $varNewsPost->ID );

if( $strUrl && $strTitle && $strDate ){
echo '<li class="listItem">' . "\n";
echo '<div class="listItemInner">' . "\n";
echo '<aside class="itemData">' . "\n";
echo '<time pubdate="pubdate">' . $strDate . '</time>' . "\n";
echo '</aside>' . "\n";
echo '<a href="' . $strUrl . '">' . $strTitle . '</a>' . "\n";
echo '</div>' . "\n";
echo '</li>' . "\n";

$flgLoop++;
if( $flgLoop > $flgLoopMax ){
break;
}
}
}
?>
                            </ul>
</div>
                    </section>
                    
                </div>
                
                
                <div class="column2 clearfix">
            
                    <div id="grid">

<?php
$cat_list = array();
foreach((get_the_category()) as $cat) {
if( $cat->cat_ID != 3 ){
$cat_list[] = $cat->cat_ID ;
}
}

$flg = false;

$query=array();
$query[] = sprintf('cat=%s', implode(',', $cat_list));
$query[] = sprintf('showposts=%d', 16);
$query[] = sprintf('meta_key=%s', 'powerpush');
$query[] = sprintf('meta_value=%s', '1');
$query[] = sprintf('orderby=%s', 'rand');


query_posts(implode('&', $query));
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( !$flg ) {
$video = get_post_meta($post->ID,'works_video',true);
$flg = true;
if( $video ) {
?>
<div class="item big" ><?php echo $video; ?></div>
<?php } else { ?>
<div class="item big" ><?php the_post_thumbnail(array(380,285)); ?></div>
<?php } } ?>

<?php if ( has_post_thumbnail() ) {?>
<div class="item" >
<?php $tnw_imgwidth = get_option('tnw-box-width');?>
<a href="<?php the_permalink();?>"><?php the_post_thumbnail(array($tnw_imgwidth,$tnw_imgwidth)); ?></a>
</div>
<?php } ?>

<?php endwhile; endif; ?>
<?php wp_reset_query() ?>


<!--/uematsu code-->



<!--TEST-->
<?php
query_posts($query_string . "&cat=10&showposts=3");
 if (have_posts()) :
  while (have_posts()) : the_post(); ?>
<dl>
 <dt class="title"><a href="<?php the_permaLink(); ?>"><?php the_title(); ?></a></dt>
 <dd class="date"><?php the_time('Y.m.d'); ?>UP</dd>
 <dd class="text"><?php
   if ( has_post_thumbnail() ): // サムネイルを持っているときの処理
    ?><?php the_post_thumbnail( array(150,150), array('class' => 'imgLeft') ); ?><?php
   else: // サムネイルを持っていないときの処理
    ?><img src="<?php bloginfo('template_url') ?>/image/no_image.gif" alt="noimage" class="imgLeft" /><?php
   endif; ?><?php the_excerpt(); ?></dd>
 </dl><?php
  endwhile;
 endif;
wp_reset_query();
?>
<!--/TEST-->


<!--TEST2-->
<?php

// クエリ
$query1 = new WP_Query( $args );

// ループ
while ( $query1->have_posts() ) {
	$query1->the_post();
	echo '<li>' . get_the_title() . '</li>';
}

/* オリジナルの投稿データを復元
 * 注意: WP_Query を使っているのでオリジナルの $wp_query を壊すことは
 * なく、wp_reset_query() によってリセットする必要はありません。
 * 投稿データを wp_reset_postdata() で復元することだけが必要です。
 */
wp_reset_postdata();


/* 2つ目のクエリ (グローバル変数を使わない) */
$query2 = new WP_Query( $args2 );

// 2つ目のループ
while ( $query2->have_posts() ) {
	$query2->the_post();
	echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
}

// 元の投稿データを復元
wp_reset_postdata();

?>
<!--/TEST2-->


<!--class-->
		<div class="classu">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_pink.png"></p><p class="subtitle">クラスのご紹介<br><span>CLASS</span></p></h2>

			<p>ベビーからキッズまで、月齢にあわせたプログラムで指導していきます！</p>


			<ul>
				<li><p>ベビーダンス<span class="classlogo mama"><img src="<?php echo get_template_directory_uri(); ?>/images/classlogo1.png"></span>首据わり～2歳頃までのベビー＆ママ（パパ）</p><p><img src="<?php echo get_template_directory_uri(); ?>/images/classphoto1.png"></p><p>ベビーを抱っこしながらダンスステップを踏むことで、お子様のリズム感を養いながら親子で運動する楽しさをお伝えします。簡単なベビーマッサージや絵本も紹介<br><i class="fa fa-star"></i>単発1,300円</p><p class="moreB">MORE</p></li>
				<li><p>プレベビーチア<span class="classlogo"><img src="<?php echo get_template_directory_uri(); ?>/images/classlogo2.png"></span>1歳3ヶ月～2歳の親子</p><p><img src="<?php echo get_template_directory_uri(); ?>/images/classphoto1.png"></p><p>よちよち歩き始めた過渡期のベビーたちへ、公園遊び＆屋内遊びの両方を取り入れ、体幹を鍛える基礎となる動きをお伝えします。<br><i class="fa fa-star"></i>3か月ごとにレッスン生募集体験1,750円(体験レッスンは随時受付)</p><p class="moreB">MORE</p></li>
			</ul>
			<ul>
				<li><p>ベビーチア<span class="classlogo baby"><img src="<?php echo get_template_directory_uri(); ?>/images/classlogo3.png"></span>1歳8ヶ月～3歳くらいまでの親子</p><p><img src="<?php echo get_template_directory_uri(); ?>/images/classphoto1.png"></p><p>小走りを始めたキッズ〜未就園児の親子体操。ご挨拶をする・順番を守るなどの社会性も大切にしながら、ダンス・鉄棒・跳び箱・マットなどの学校体育にチャレンジしていきます。<br><i class="fa fa-star"></i>体験1,600円</p><p class="moreB">MORE</p></li>
				<li><p>キッズチアダンス<span class="classlogo"><img src="<?php echo get_template_directory_uri(); ?>/images/classlogo4.png"></span>3歳～小学校低学年</p><p><img src="<?php echo get_template_directory_uri(); ?>/images/classphoto1.png"></p><p>チアダンスの技術面だけでなく「グローバルに活躍できる人になること」を目標に、挨拶・礼儀など内面を輝かせることも重視したレッスン内容です。
<br><i class="fa fa-star"></i><strong>毎年3月頃にレッスン生募集。定員になり次第締め切り。</strong></p><p class="moreB">MORE</p></li>
			</ul>

			<p>Starssmileyのチアダンススクールは、世界で通用する力を手に入れるプログラムを用意しています！
				英語を活用したダンス指導のほか、基礎体力・表現・奉仕の精神を柱に、踊っている自分自身も、
				見ている人も笑顔で元気にするダンスを目指しています！
			</p>
			<?php if( in_category( 'クラス紹介' )) : ?>
			このカテゴリの場合に表示するもの
			<?php endif; ?>



<ul>
			<?php
		query_posts('showposts=1');
		if (have_posts()) :
		while (have_posts()) :
		the_post();
		?>
		<li><a href="<?php the_permalink() ?>"><?php the_title(); ?><?php the_category('') ?></a></li>
		<?php
		endwhile;
		endif;
		?>
	</ul>

	<ul>
				<?php
			query_posts('showposts=1');
			if (have_posts()) :
			while (have_posts()) :
			the_post();
			?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?><?php the_category('') ?></a></li>
			<?php
			endwhile;
			endif;
			?>
		</ul>
		</div>
<!--/class-->

<?php
$cat_list = array();
foreach((get_the_category()) as $cat) {
if( $cat->cat_ID != 3 ){
$cat_list[] = $cat->cat_ID ;
}
}

$flg = false;

$query=array();
$query[] = sprintf('cat=%s', implode(',', $cat_list));
$query[] = sprintf('showposts=%d', 16);
$query[] = sprintf('meta_key=%s', 'powerpush');
$query[] = sprintf('meta_value=%s', '1');
$query[] = sprintf('orderby=%s', 'rand');


query_posts(implode('&', $query));
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( !$flg ) {
$video = get_post_meta($post->ID,'works_video',true);
$flg = true;
if( $video ) {
?>
<div class="item big" ><?php echo $video; ?></div>
<?php } else { ?>
<div class="item big" ><?php the_post_thumbnail(array(380,285)); ?></div>
<?php } } ?>

<?php if ( has_post_thumbnail() ) {?>
<div class="item" >
<?php $tnw_imgwidth = get_option('tnw-box-width');?>
<a href="<?php the_permalink();?>"><?php the_post_thumbnail(array($tnw_imgwidth,$tnw_imgwidth)); ?></a>
</div>
<?php } ?>

<?php endwhile; endif; ?>
<?php wp_reset_query() ?>




<!--campaign-->
		<div class="campaign">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_cream.png"><p>体験・キャンペーンのご案内<p></h2>


			<ul>
				<li><p><img src="<?php echo get_template_directory_uri(); ?>/images/campaign.png"></p><p>チアダンスは毎年2月・3月頃に体験会を行っております。それ以外の月は、個別にお問合せ下さい。</p></li>
				<li><p><img src="<?php echo get_template_directory_uri(); ?>/images/campaign.png"></p><p>ベビーダンス、プレ・ベビーチア、ベビーチア、
この他のレッスンについては、随時体験受付中です。</p></li>
				<li><p><img src="<?php echo get_template_directory_uri(); ?>/images/campaign.png"></p><p>季節にあわせたイベントも行っております。
詳しくはスケジュール表をご覧下さい。</p></li>
			</ul>
		</div>
<!--/campaign-->

<!--voice-->
		<div class="voice">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_green.png"><p>お客様の声<br><span>VOICE</span><p></h2>

			<ul>
				<li><p><span class="comme"><img src="<?php echo get_template_directory_uri(); ?>/images/voicecomme.png"></span><span class="commeText">お気に入りの<br>リズムを見つけたよ♪</span><img src="<?php echo get_template_directory_uri(); ?>/images/voice1.png"></p><p>Fちゃん親子<br>ベビーチアを始めたきっかけは上の子がやっていた事です。
2才から始め最初の頃は私から離れなく何をするにも私がいないとダメでした。
でも、言葉がうまく話せるようになったぐらいから自信が持てたのか、
自己紹介では自分から手を挙げて名前や年令が言えるようになり、
運動の方も上の学年の子と競うぐらいになってました。
今思えば私から離れなかった時から徐々に基礎体力がついたのだと思います。
ベビーチアではダンスを親子で覚えママフェス、運動会、さくらまつりなどで発表会があり、
親子の思い出作りできるので、私はすごくうれしいです。先生や友達には本当感謝してます。</p></li>
				<li><p><span class="comme"><img src="<?php echo get_template_directory_uri(); ?>/images/voicecomme.png"></span><span class="commeText">集団の中で、<br>本気で学ぶことが出来ました</span><img src="<?php echo get_template_directory_uri(); ?>/images/voice2.png"></p><p>Sちゃん親子<br>娘は年中になった頃から、チアダンスを習いたいと言い続けていました。
お友達の紹介でスターズスマイリーに入会しました。
3年目になり、1度も休みたい、辞めたいと言う事もなく、
とにかくチアダンスを楽しんでいます。
レッスンはメリハリがあり、自分なりの目標も出来ました。
チアダンスで学ぶ事は沢山あると思うので、続けていけたら良いです。</p></li>
				<li><p><span class="comme"><img src="<?php echo get_template_directory_uri(); ?>/images/voicecomme.png"></span><span class="commeText">同じ歳頃の子たちと一緒に<br>学べ、刺激になりました！</span><img src="<?php echo get_template_directory_uri(); ?>/images/voice3.png"></p><p>M君親子<br>入会のきっかけは楽しそうだったからと単純なものです。受講してみると、小さな頃は見て真似る事を覚え、大きくなるにつれ小さな子を応援する優しい気持ち、
					手本になろうと頑張る気持ちが育ち心の大切な部分を育てて頂けたと思います。</p></li>
			</ul>
		</div>
<!--/voice-->

<!--FAQ-->
		<div class="faq">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_yellow.png"><p>よくあるご質問<br><span>FAQ</span><p></h2>


			<ul class="clearfix">
				<li><div class="Q">今までチアダンスをしたことが無いのですが、入会できますか？</div><div class="Ans">リトルクラス(年少組)へは、ベビーチア卒業生から優先的に受付しております。3月以降に残席がある場合のみ、全クラス新規レッスン生を募集いたします。基礎的な運動能力・本人のやる気などを拝見させていただきますので、ぜひお問合せ下さい。</div></li>
				<li><div class="Q">歩き始めの活発な子なのですが、プレ・ベビーチアとベビーチアのどちらのレッスンが合っていますか？</div><div class="Ans">同時期に両方の体験レッスンをご受講いただくことも可能です。お子様のタイプにもよりますが、
ご心配な場合にはプレ・ベビーチアからご参加されることをお勧めしております。</div></li>
				<li><div class="Q">チアというと女の子というイメージですが、男の子も参加可能ですか？</div><div class="Ans">「ベビーチア」は未就園児の親子体操レッスンとなっておりますので、
男の子にも多数ご参加いただいております。また年少以降のチアダンスクラスにも男の子が在籍しておりますので、安心してご参加下さい。</div></li>
			</ul>
		</div>
<!--/FAQ-->

<!--STAFF-->
		<div class="coach">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_blue.png"><p>スタッフ<br><span>coach</span><p></h2>


			<ul class="clearfix">
				<li><div class="murata">
							<span class="spnTop">代表・講師</span><span class="spnUndr">村田&nbsp;綾子(Ayako&nbsp;Murata)</span>
						</div>
						<div class="Ans coachtext"><a href="#" title="日本チアダンス協会インストラクター、USAチアダンス協会インストラクター3級、幼児体育協会インストラター、新浦安RAINBOW SMILEY、幕張インターナショナル、スクール「Dolphins」、たまプラーザStars Smiley、恵比寿Stars Smiley、デイレクター兼チーフインストラクター
						現在、チアダンス・ベビーチア、幼児体操、障がい児体操、スポーツの家庭教師、インストラクターとして活動。">日本女子体育大学卒業大学卒業後、テーマパークでシンガー・ダンサーで活躍。未就園児の親子体操「ベビーチア」発案。日本チアダンス協会インストラクター、USAチアダンス協会インストラクター3級、幼児体育協会インストラター、新浦安RAINBOW SMILEY、幕張インターナショナル、スクール「Dolphins」、たまプラーザStars Smiley、恵比寿Stars Smiley、デイレクター兼チーフインストラクター
						現在、チアダンス・ベビーチア、幼児体操、障がい児体操、スポーツの家庭教師、インストラクターとして活動。
														<!--<span></span>--></a>
						</div>
				</li>
				<li>
					<div class="shikima">
						<span class="spnTop">講師</span><span class="spnUndr">色摩&nbsp;由維(Yui&nbsp;Shikama)</span>
					</div>
					<div class="Ans">東京家政学院短期大学　英語科卒業中学・高校バトン部、大学卒業後はミュージカル、芝居で活躍。
新浦安RAINBOW SMILEYアシスタントインストラクター、幕張インターナショナル、スクール「dolphins」、恵比寿Stars Smiley、たまプラーザStars Smiley、チーフインストラクター
現在、キッズチアダンス、ベビーチア、障がい児体操、スポーツの家庭教師インストラクターとして活動。
					</div>
				</li>
				<li>
					<div class="usuda">
						<span class="spnTop">講師</span><span class="spnUndr">薄田&nbsp;昌子(Masako&nbsp;Usuda)</span>
					</div>
					<div class="Ans">大阪芸術大学舞台芸術ミュージカルコース卒業中学・高校体操部で活躍。県大会種目別、床、入賞。
その後、テーマパークでパフォーマーを経て、NSCA-CPT パーソナルトレーナーとして活動。たまプラーザStars Smiley、チーフインストラクター、恵比寿Stars Smiley、アシスタントインストラクター
現在、キッズチアダンス、ベビーチア、幼児体操、障がい児体操、スポーツの家庭教師インストラクターとして活動。
					</div>
				</li>
			</ul>

		</div>
<!--/STAFF-->

<!--smileyHouse-->
		<div class="smileyHouse">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_yellow.png"><p>スマイリーハウスのご案内<br><span>FAQ</span><p></h2>


			<ul class="clearfix">
				<li>
					<div class="Q"><span><img src="<?php echo get_template_directory_uri(); ?>/images/campaign.png"></span></div>
					<div class="Ans">あああああああああああああああああああああああああああああああああああああああああああ</div>
				</li>
				<li>
					<div class="Q"><span><img src="<?php echo get_template_directory_uri(); ?>/images/campaign.png"></span></div>
					<div class="Ans"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.073921078037!2d139.55186985037147!3d35.576567243216246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f71167e79711%3A0x85f0802413fa4850!2z44CSMjI1LTAwMDIg56We5aWI5bed55yM5qiq5rWc5biC6Z2S6JGJ5Yy6576O44GX44GM5LiY77yV5LiB55uu77yW4oiS77yR!5e0!3m2!1sja!2sjp!4v1459756919572" width="100%"frameborder="0" style="border:0" allowfullscreen></iframe></div>
				</li>
			</ul>

			<p class="moreB">MORE</p>
		</div>
<!--/smileyHouse-->

<!--NEWS SNS-->
		<div class="news">
			<h2><p><img src="<?php echo get_template_directory_uri(); ?>/images/pom_cream.png"><p>最新情報・会社概要・採用・SNS・プライバシーポリシー<br><span>FAQ</span><p></h2>





		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<ul class="post clearfix">
					<li>
						<span class="title">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</span>
							<ul class="blog_info clearfix">
								<li class="cal"><?php the_time('Y年m月d日') ?></li>
								<li class="cat"><?php the_category('NEWS') ?></li>
								<li class="tag"><?php the_tags('NEWS', ', '); ?></li>
							</ul>

					<p><?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?></p>

					<span><?php the_content('続きを読む'); ?></span>

		</li>
			<?php endwhile; ?>

					<div class="nav-below">
					<span class="nav-previous"><?php next_posts_link('古い記事へ') ?></span>
					<span class="nav-next"><?php previous_posts_link('新しい記事へ') ?></span>
				</div><!-- /.nav-below -->

			<?php else : ?>

					<h2 class="title">記事が見つかりませんでした。</h2>
					<p>検索で見つかるかもしれません。</p><br />
					<?php get_search_form(); ?>
			<?php endif; ?>

	</ul>

  <?php
  $categories = get_categories();
  foreach($categories as $category) :
  ?>
  <div><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></div>
  <ul>
  <?php
  query_posts('cat='.$category->cat_ID);
  if (have_posts()) : while (have_posts()) : the_post();
  ?>
  <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
  <?php endwhile; endif; ?>
  </ul>
  <?php endforeach; ?>



  <?php
  $categories = get_categories('parent=0');
  foreach($categories as $category) :
  ?>
  <div><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></div>
  <ul>
  <?php
  query_posts('cat='.$category->cat_ID);
  if (have_posts()) : while (have_posts()) : the_post();
  ?>
  <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
  <?php endwhile; endif; ?>
  </ul>
  <?php endforeach; ?>

		</div>
<!--/NEWS SNS-->


	<!-- / warpper-->

<div>

</body>
</html>
