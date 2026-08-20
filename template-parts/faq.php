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
		'a' => '엄선된 사료를 먹여서 직접 사육하고 있어서, 원육 자체의 냄새가 많이 나지 않고, 도축 후 식재료 준비 과정에서 손질과 조리 과정에 신경 써서 준비하고 있어 잡내가 나지 않습니다.',
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
		'a' => '네이버 예약을 통해 예약하실 수 있습니다.',
	),
	array(
		'q' => '주차 가능한가요?',
		'a' => '20대까지 주차 가능합니다.',
	),
	array(
		'q' => '전골/불고기는 몇 인분부터 가능한가요?',
		'a' => '2인분 기준으로 주문 가능합니다.',
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
