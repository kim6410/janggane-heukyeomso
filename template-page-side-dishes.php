<?php
/**
 * Template Name: 반찬과 손맛
 *
 * 직접 담근 반찬 상세 페이지. template-parts/side-dishes.php를 재사용합니다.
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
			'label' => '반찬과 손맛',
			'desc'  => '석박지 스타일 깍두기와 겉절이, 직접 담근 반찬만 올립니다.',
		)
	);
	get_template_part( 'template-parts/side-dishes' );
	?>
	<section class="section section--alt">
		<div class="container">
			<p class="section-desc">
				사진이 확보되는 대로 반찬 종류를 하나씩 추가할 예정입니다. 지금은 확보된 사진이 있는
				깍두기만 실사진으로 보여드리고, 나머지는 "사진 준비 중" 표시로 남겨둡니다.
			</p>
		</div>
	</section>
</main>
<?php get_footer(); ?>
