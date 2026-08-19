<?php
/**
 * 9. FAQ — CONTENT_PLAN.md 3-9절의 질문 6개. 답변은 확정 정보가 없어 임시 문구입니다.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$faqs = array(
	array(
		'q' => '흑염소 냄새가 강한가요?',
		'a' => '재료 손질과 조리 과정에 신경 써서 준비하고 있습니다. (자세한 답변은 사장님 확인 후 채울 예정)',
	),
	array(
		'q' => '어르신들이 먹기 괜찮나요?',
		'a' => '중장년층·어르신 손님도 편하게 드실 수 있도록 준비하고 있습니다. (확정 문구 TODO)',
	),
	array(
		'q' => '포장 가능한가요?',
		'a' => '포장 가능 여부를 확인 중입니다. (TODO — PROJECT_BRIEF.md 8-3절)',
	),
	array(
		'q' => '예약 가능한가요?',
		'a' => '예약 방법을 확인 중입니다. (TODO)',
	),
	array(
		'q' => '주차 가능한가요?',
		'a' => '주차 가능 대수를 확인 중입니다. (TODO)',
	),
	array(
		'q' => '전골/불고기는 몇 인분부터 가능한가요?',
		'a' => '인분 기준을 확인 중입니다. (TODO — PROJECT_BRIEF.md 8-4절)',
	),
);
?>
<section class="section section--alt">
	<div class="container">
		<span class="section-eyebrow">FAQ</span>
		<h2>자주 묻는 질문</h2>

		<?php foreach ( $faqs as $item ) : ?>
			<div class="faq-item">
				<div class="faq-item__q"><span>Q.</span> <?php echo esc_html( $item['q'] ); ?></div>
				<p class="faq-item__a">A. <?php echo esc_html( $item['a'] ); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</section>
