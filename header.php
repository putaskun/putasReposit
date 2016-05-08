<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/slide.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/pc.css" media="screen and (min-width: 1025px)" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/tblt.css" media="screen and (min-width:767px) and (max-width: 1024px)" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/landsmh.css" media="screen and (min-width: 568px) and (max-width:766px)" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/smh.css" media="screen and (max-width: 567px)" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/humdemo.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
	<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/balloon.js"></script>
</head>
<body>
<script>
	//すべての要素が読み込み終わったら、ローディング画面を非表示にする
	$(document).ready(function(){
	$(window).load(function(){
		$(".loadingWrap").fadeOut(500);
	});
	  });
</script>

<script>$("#getw").click(function () {
  showHeight("window", $(window).height());
});
</script>

<script>
  $(document).ready(function(){
    //画面の高さを取得して、変数wHに代入
    var wH = $(window).height();
        $("div.wrapper").css("paddingTop", wH );
				$("div#uchabout").css("top", wH - 120 );
  });
  </script>



	<!--JS固定Footer　Menu 開閉-->

	<script>
	  $(document).ready(function(){
	// オーバーレイ作成
	$('#contents').prepend('<div class="overlay"></div>');
	// アイコンをクリックしたら
	$('.navBtn').click(function() {
	$('header#smh').toggleClass('navOpen'); // class付与/削除
	$('.overlay').toggle(); // オーバーレイ表示/非表示
	  // スマホナビゲーションがヘッダーに被らないようにする
	  var headerH = $('header#smh').outerHeight();
	  if ($('header').hasClass('navOpen')) {
	  $('header#smh nav').css('marginTop', headerH + 'px'); //ヘッダーの高さ分マージンを付ける
	        }
	});
	// オーバーレイをクリックしたら
	$('.overlay').click(function() {
	        $(this).fadeOut(300); // オーバーレイ非表示
	       $('header#smh').removeClass('navOpen'); // class削除
	});
	  });
	</script>

	<!--/JS固定Footer　Menu 開閉-->


	<div class='loadingWrap'>
		<p><img src='<?php echo get_template_directory_uri(); ?>/images/toplogo.png'></p>
	</div>






	<header id="smh">
	    <div class="inner">
	        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/toplogo.png" alt="starssmileytitleロゴ"></a></h1>
	        <p class="navBtn">
	            <span></span>
	            <span></span>
	            <span></span>
	        </p>
	        <nav role='navigation'>
	            <ul>
	              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#uchabout">グローバルチアについて</a></li>
	              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#classu">クラス紹介</a></li>
	              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#coach">コーチ</a></li>
	              <li><a href="">料金</a></li>
	              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#voice">お客様の声</a></li>
	              <li><a href="http://dp18311054.lolipop.jp/wordpress/otoiawase/"><i class="fa fa-envelope"></i><span>お問い合わせ</span></a></li>
	              <li><a href=""><i class="fa fa-phone"></i>045-909-0081</a></li>
							</ul>
	        </nav>
	    <!-- /.inner --></div>
	</header>



	<header id="pc-tblt">
		<nav>
			<ul class="clearfix">
				<li class="menuTitle"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/toplogo.png" alt="starssmileytitleロゴ"></a></li>
				<li class="menuAbout"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#uchabout">グローバルチアについて</a></li>
				<li class="menuClass"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#classu">クラス紹介</a></li>
				<li class="menuCoach"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#coach">コーチ</a></li>
				<li class="menuFee"><a href="">料金</a></li>
				<li class="menuVoice"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#voice">お客様の声</a></li>
				<li class="otoiawase"><a href="http://dp18311054.lolipop.jp/wordpress/otoiawase/"><i class="fa fa-envelope"></i><span>お問い合わせ</span></a></li>
				<li class="otoiawase telban"><a href=""><i class="fa fa-phone"></i>045-909-0081</a></li>
			</ul>
		</nav>

	</header>
<!--END#header-->
