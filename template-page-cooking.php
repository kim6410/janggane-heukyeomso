<?php
/**
 * Template Name: 조리과정
 *
 * 조리 과정 상세 페이지. template-parts/cooking-process.php를 재사용하고,
 * 위생상 부담스러운 사진을 크게 쓰지 않기 위해 작은 과정 스텝 썸네일 3개를 추가합니다.
 * (모두 실사진 미확보 상태 — PHOTO_INVENTORY.md 10-1절 후보 확인 후 교체 예정)
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$process_steps = array(
	array( 'label' => '고사리 손질' ),
	array( 'label' => '국물 끓이는 과정' ),
	array( 'label' => '재료 손질' ),
);
?>
<main id="main-content">
	<?php
	get_template_part(
		'template-parts/page-intro',
		null,
		array(
			'label' => '조리과정',
			'desc'  => '오랜 시간 정성껏 끓여낸 국물, 손질 과정을 작은 사진으로만 안내합니다.',
		)
	);
	get_template_part( 'template-parts/cooking-process' );
	?>
	<section class="section">
		<div class="container">
			<h2>과정을 작게, 있는 그대로</h2>
			<p class="section-desc">
				조리 공간 사진은 위생상 크게 노출하지 않고, 아래처럼 작은 과정 사진으로만 안내합니다.
				실제 사진은 확보되는 대로 교체합니다.
			</p>
			<div class="process-steps">
				<?php foreach ( $process_steps as $step ) : ?>
					<div class="process-step">
						<div class="process-step__thumb">사진<br>준비 중</div>
						<div class="process-step__label"><?php echo esc_html( $step['label'] ); ?></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
