<?php
/****************************************

	functions.php

	テーマ内で利用する関数を定義したり、
	テーマの設定を行うためのファイルです。

*****************************************/

/** メインカラムの幅を指定する変数。下記は 600px を指定（記述推奨）*/
if ( ! isset( $content_width ) ) $content_width = 600;

/** <head>内に RSSフィードのリンクを表示するコード */
add_theme_support( 'automatic-feed-links' );

/** ダイナミックサイドバーを定義するコード（CHAPTER 11）*/
register_sidebar( array(
	'name'			=> 'サイドバーウィジット-1',
	'id'			=> 'sidebar-1',
	'description'	=> 'サイドバーのウィジットエリアです。デフォルトのサイドバーと丸ごと入れ替えたいときに使ってください。',
    'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    'after_widget'	=> '</div>',
) );

/** 複数のダイナミックサイドバーを定義するコード（CHAPTER 11）*/
/*
register_sidebar( array(
	'name'			=> 'サイドバーウィジット-2',
	'id'			=> 'sidebar-2',
	'description'	=> 'サイドバーのウィジットのテストです。',
    'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
    'after_widget'	=> '</div>',
));
*/
function exclude_widget_categories( $args){
    $exclude = '7,8,9,10';          // 除外するカテゴリーのIDをカンマ区切りで指定
    $args['exclude'] = $exclude;
    return $args;
}
add_filter( 'widget_categories_args', 'exclude_widget_categories');
/** カスタムメニュー機能を有効にするコード（CHAPTER 12）*/
add_theme_support( 'menus' );

/** カスタムメニューの「場所」を設定するコード */
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
// register_nav_menu( 'sidebar-navi', 'サイドバーのナビゲーション' );
// register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );

/** アイキャッチ画像機能を有効にするコード（CHAPTER 14）*/
add_theme_support( 'post-thumbnails' );

/** 抜粋の[...]を...に変更するコード（CHAPTER 14）*/
function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/** カスタムヘッダーを img 要素として有効にするコード（CHAPTER 15）*/
$args = array(
	'width'			=> 980,
	'height'		=> 120,
	'flex-height'	=> true,
	'header-text'	=> false,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'		=> true,
);
add_theme_support( 'custom-header', $args );

/**
 * 【補足】カスタムヘッダーのデフォルト画像を「登録」するコード
 *  デフォルト画像を一枚、または複数枚あらかじめ「登録」しておくと、カスタムヘッダーの管理画面でいつでも登録済みの画像に切り替えることができます。
 */
register_default_headers( array(
	/** デフォルト画像の登録 */
	'image1' => array( /** 「image1」 の部分は、任意の名前をつけてください。 */
		'url'           => get_template_directory_uri() . '/images/header.jpg', /** 画像へのパス */
		'thumbnail_url' => get_template_directory_uri() . '/images/header.jpg', /** サムネイル画像へのパス（別途用意してあるなら、header-thumbnail.jpg などのファイル名に変更します。） */
		'description'   => 'I love cake &amp; coffee', /** 画像の説明文 */
	),

	/** 以下、画像を複数登録する場合に記述します。本サンプルではコメントアウトしています（画像は用意されていません）。 */
	/** 2 枚目の画像 */
	/*
	'image2' => array(
		'url'           => get_template_directory_uri() . '/images/header2.jpg',
		'thumbnail_url' => get_template_directory_uri() . '/images/header2.jpg',
		'description'   => '画像 2の説明文',
	),
	*/

	/** 3 枚目の画像 */
	/*
	'image3' => array(
		'url'           => get_template_directory_uri() . '/images/header3.jpg',
		'thumbnail_url' => get_template_directory_uri() . '/images/header3.jpg',
		'description'   => '画像 3の説明文',
	),
	*/
) );

/** カスタムヘッダーを 背景画像として有効にするコード（CHAPTER 15）*/
/*
$args = array(
	'width' 					=> 940,
	'flex-height' 				=> true,
	'height' 					=> 250,
	'default-text-color'		=> 'ffffff',
	'header-text'				=> true,
	'default-image'				=> get_template_directory_uri() . '/images/header.jpg',
	'uploads'					=> true,
	'wp-head-callback'			=> 'header_style',
	'admin-preview-callback'	=> 'admin_header_image',
	'admin-head-callback' 		=> 'admin_header_style',
);
add_theme_support( 'custom-header', $args );
*/

/** カスタムヘッダーの CSS を head 内に出力する関数（CHAPTER 15）*/
/*
function header_style() { ?>
<style>
	#header-image {
		background: url(<?php header_image(); ?>);
		color: #<?php header_textcolor(); ?>;
		width: <?php echo get_custom_header()->width; ?>px;
		height: <?php echo get_custom_header()->height; ?>px;
	}
	#header-image p {
		padding: 5em 3em;
	}
</style>
<?php }
*/

/** カスタムヘッダーの管理画面で、ヘッダー画像上にテキストを表示する関数（CHAPTER 15）*/
/*
function admin_header_image() {
	$style = 'style="background-image :url( ' . get_header_image() . ' ); max-width: ' . get_custom_header()->width . 'px; height: ' . get_custom_header()->height . 'px;"';
	$color = 'style="color: #' . get_header_textcolor() . ';"'; ?>
	<div id="headimg" <?php echo $style; ?>>
		<p <?php echo $color; ?>><?php bloginfo( 'description' ); ?></p>
	</div>
<?php }
*/

/** カスタムヘッダーの管理画面で、ヘッダー画像上のテキストのCSSを出力する関数（CHAPTER 15）*/
/*
function admin_header_style() { ?>
	<style type="text/css">
		#headimg {
			max-width: <?php echo get_custom_header()->width; ?>px;
			height: <?php echo get_custom_header()->height; ?>px;
		}
		#headimg p{
			font-size: 14px;
			padding: 5em 3em;
		}
	</style>
<?php }
*/


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(); // 幅 1000px、高さ 500px、切り抜きモード


add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
add_image_size('campaign', 450, 200);
add_image_size('class', 400, 240);
add_image_size( 'news', 400, 100);
}

//add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
//add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

//function remove_width_attribute( $html ) {

//   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );

//   return $html;

//}
