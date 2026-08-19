<?php
/**
 * 공통 헤더 (1개만 존재, 모든 화면이 이 파일을 공유합니다).
 * 00_READ_FIRST.md / WORDPRESS_THEME_PLAN.md 원칙: 화면마다 header.php를 복사해서
 * 조금씩 고치는 방식은 금지되어 있습니다.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	// TODO: 최종 상호/문구가 확정되면 wp_head 앞뒤로 JSON-LD LocalBusiness/Restaurant
	// 구조화 데이터를 추가한다 (PROJECT_BRIEF.md 9-3절 참고). 지금은 임시값이 많아 보류.
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="site-header__inner">
		<a class="site-header__brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php echo esc_html( janggane_get_business_info( 'brand_name_short' ) ); ?>
		</a>
		<a class="site-header__phone" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', janggane_get_business_info( 'phone' ) ) ); ?>">
			📞 <?php echo esc_html( janggane_get_business_info( 'phone' ) ); ?>
		</a>
	</div>
</header>
