<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/slide.css" rel="stylesheet" type="text/css">
<!--	<link href="<?php echo get_template_directory_uri(); ?>/css/smh.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/pc.css" rel="stylesheet" type="text/css">-->
<link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
	<!--	<link href="<?php echo get_template_directory_uri(); ?>/css/simplestyle.css" rel="stylesheet" type="text/css">-->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
	<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/balloon.js"></script>
</head>
<body>



<script>$("#getw").click(function () {
  showHeight("window", $(window).height());
});
</script>


<script>
  $(document).ready(function(){
    //画面の高さを取得して、変数wHに代入
    var wH = $(window).height();
        $("div.wrapper").css("paddingTop", wH );
  });
  </script>


	<div id="header">
		<nav>
			<ul class="clearfix">
				<li class="menuTitle"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/toplogo.png" alt="starssmileytitleロゴ"></a></li>
				<li class="menuAbout"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#uchabout">グローバルチアについて</a></li>
				<li class="menuClass"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#classu">クラス紹介</a></li>
				<li class="menuCoach"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#coach">コーチ</a></li>
				<li class="menuFee"><a href="">料金</a></li>
				<li class="menuVoice"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#voice">お客様の声</a></li>
				<li class="otoiawase"><a href=""><i class="fa fa-envelope"></i>お問い合わせ</a></li>
				<li class="otoiawase telban"><a href=""><i class="fa fa-phone"></i>045-909-0081</a></li>
			</ul>
		</nav>



	</div>
<!--END#header-->
