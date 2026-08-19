<?php
/**
 * Template Name: 농장직영 이야기
 *
 * 농장직영/재료 신뢰 이야기 상세 페이지. template-parts/farm-story.php를 재사용하고,
 * 상세 페이지이므로 문단 하나를 추가해 홈 화면보다 조금 더 구체적으로 설명합니다.
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
			'label' => '농장직영 이야기',
			'desc'  => '농장에서 직접 기른 재료로 신뢰를 만듭니다. 과장 없이, 보이는 그대로 전합니다.',
		)
	);
	get_template_part( 'template-parts/farm-story' );
	?>
	<section class="section">
		<div class="container">
			<h2>재료는 눈에 보이는 만큼만 말합니다</h2>
			<p>
				고추밭에서 직접 수확한 고추, 산지에서 다듬은 고사리 등 손이 많이 가는 재료를
				하나씩 직접 관리합니다. "최고", "1위" 같은 표현 대신, 실제로 하는 일을 있는 그대로
				보여드리는 것을 원칙으로 합니다. (문구는 사장님 확인 후 구체적인 재료·과정으로 보강 예정)
			</p>
		</div>
	</section>
</main>
<?php get_footer(); ?>
