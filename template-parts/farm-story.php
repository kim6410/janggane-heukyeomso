<?php
/**
 * 3. 농장직영/재료 이야기 — CONTENT_PLAN.md 3-3절 문구 초안.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$farm_image = get_template_directory_uri() . '/assets/photos_web/farm-01.jpg';
?>
<section class="section section--alt">
	<div class="container">
		<div class="split">
			<div class="split__image">
				<img src="<?php echo esc_url( $farm_image ); ?>" alt="농장에서 직접 기른 재료 (사진 내용 확인 전 임시 배치)">
			</div>
			<div>
				<span class="section-eyebrow">농장직영 / 재료 이야기</span>
				<h2>보이는 재료, 믿고 먹는 한 끼</h2>
				<p>직접 기르고 손질한 재료로, 눈에 보이는 만큼 믿을 수 있는 한 그릇을 준비합니다.
				고추, 고사리 등 재료를 산지에서부터 정성껏 다듬습니다.</p>
				<div class="trust-tags">
					<span class="trust-tag">농장직영</span>
					<span class="trust-tag">직접 손질한 재료</span>
					<span class="trust-tag">정직한 한 그릇</span>
					<span class="trust-tag">쌀·김치·고춧가루 국내산</span>
				</div>
				<p class="menu-note" style="margin-top:10px;">농장 주소: <?php echo esc_html( janggane_get_business_info( 'farm_address' ) ); ?></p>
			</div>
		</div>
	</div>
</section>
