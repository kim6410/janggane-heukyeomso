<?php
/**
 * Template Name: 메뉴소개
 *
 * 대표 메뉴 상세 페이지. 실제 WordPress 페이지를 만든 뒤 이 템플릿을 지정하면
 * (예: /menu/) 접근할 수 있습니다 (지금은 코드 초안 단계, 실제 페이지 미생성).
 * 콘텐츠는 template-parts/menu.php를 그대로 재사용해 홈 화면과 내용이 어긋나지 않게 합니다.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content">
	<?php
	get_template_part(
		'template-parts/page-intro',
		null,
		array(
			'label' => '메뉴소개',
			'desc'  => '흑염소탕 · 흑염소전골 · 흑염소불고기 — 가격과 인분 기준은 사장님 확인 후 채워집니다.',
		)
	);
	get_template_part( 'template-parts/menu' );
	?>
</main>
<?php get_footer(); ?>
