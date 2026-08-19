<?php
/**
 * 4. 직접 담근 반찬 — 깍두기, 겉절이 중심 (CONTENT_PLAN.md 3-4절).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$dish_image = get_template_directory_uri() . '/assets/photos_web/dish-01.jpg';
?>
<section class="section">
	<div class="container">
		<span class="section-eyebrow">직접 담근 반찬</span>
		<h2>국물만큼 정성 들인 밑반찬</h2>
		<p class="section-desc">깍두기와 겉절이도 직접 담급니다.</p>

		<div class="dish-grid">
			<div class="dish-card">
				<div class="dish-card__image">
					<img src="<?php echo esc_url( $dish_image ); ?>" alt="직접 담근 깍두기 (사진 내용 확인 전 임시 배치)">
				</div>
				<div>
					<div class="dish-card__name">직접 담근 깍두기</div>
					<p class="dish-card__desc">석박지 스타일로 담근 깍두기입니다. (설명 문구 확정 전 임시)</p>
				</div>
			</div>
			<div class="dish-card">
				<div class="dish-card__image gallery-grid__item--placeholder" style="width:96px;height:96px;">사진 준비 중</div>
				<div>
					<div class="dish-card__name">겉절이</div>
					<p class="dish-card__desc">신선하게 무쳐낸 겉절이입니다. (사진 확보 전 임시 표시)</p>
				</div>
			</div>
		</div>
	</div>
</section>
