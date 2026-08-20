<?php
/**
 * 1. Hero — CONTENT_PLAN.md 3-1절 문구 초안을 그대로 반영했습니다.
 * TODO: 상호/서브문구/버튼 링크는 janggane_get_business_info() 를 통해 옵션 페이지와
 * 연결 예정입니다. 대표 사진은 assets/photos_web/hero-01.jpg (1차 추정 후보,
 * PHOTO_INVENTORY.md 10-1절 기준 실사진 육안 확인 전 — 안전하게 농장/매장 계열로 선택).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_image = get_template_directory_uri() . '/assets/photos_web/hero-01.jpg';
?>
<section class="hero">
	<div class="hero__image-wrap">
		<img src="<?php echo esc_url( $hero_image ); ?>" alt="정자골 장가네 농장직영 흑염소 보양탕 대표 이미지 (내용 확인 전 임시 배치)">
	</div>
	<div class="hero__body">
		<div class="hero__location">울산 북구 호계동</div>
		<h1 class="hero__title"><?php echo esc_html( janggane_get_business_info( 'brand_name' ) ); ?></h1>
		<p class="hero__subtitle">직접 손질한 재료와 깊게 끓인 국물, 울산에서 든든하게 챙기는 보양식 한 그릇</p>
		<div class="hero__cta">
			<a class="btn btn--primary" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', janggane_get_business_info( 'phone' ) ) ); ?>"><svg class="icon-tel" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2z"/></svg> 전화 예약</a>
			<a class="btn btn--outline" href="<?php echo esc_url( janggane_get_business_info( 'map_url' ) ); ?>">📍 길찾기</a>
			<a class="btn btn--outline" href="#menu-section" data-scroll-to="#menu-section">🍲 메뉴 보기</a>
		</div>
	</div>
</section>
