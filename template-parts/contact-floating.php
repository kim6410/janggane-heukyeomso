<?php
/**
 * 10. 하단/플로팅 CTA — 상시 노출. footer.php에서 항상 include 됩니다.
 * 카카오톡 링크가 비어 있으면 버튼을 숨깁니다 (WORDPRESS_THEME_PLAN.md 3절 원칙).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$phone      = janggane_get_business_info( 'phone' );
$map_url    = janggane_get_business_info( 'map_url' );
$kakao_url  = janggane_get_business_info( 'kakao_url' );
$has_kakao  = ! empty( $kakao_url );
?>
<nav class="contact-floating<?php echo $has_kakao ? ' has-kakao' : ''; ?>" aria-label="바로 연락하기">
	<div class="contact-floating__inner">
		<a class="btn btn--primary" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>"><svg class="icon-tel" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2z"/></svg><br>전화하기</a>
		<a class="btn btn--outline" href="<?php echo esc_url( $map_url ); ?>">📍<br>길찾기</a>
		<?php if ( $has_kakao ) : ?>
			<a class="btn btn--outline" href="<?php echo esc_url( $kakao_url ); ?>">💬<br>카카오톡 문의</a>
		<?php endif; ?>
		<?php // 카카오톡 링크가 비어 있으면(TODO) 버튼 자체를 렌더링하지 않아 그리드가 3열로 유지됩니다. ?>
		<a class="btn btn--red" href="#menu-section" data-scroll-to="#menu-section">🍲<br>메뉴 보기</a>
	</div>
</nav>
