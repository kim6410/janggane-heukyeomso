<?php
/**
 * 8. 위치와 영업정보 — 전화번호/주소/영업시간/지도는 janggane_get_business_info()
 * 한 곳에서만 읽습니다 (WORDPRESS_THEME_PLAN.md 1절 원칙).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="section">
	<div class="container">
		<span class="section-eyebrow">위치와 영업정보</span>
		<h2>오시는 길</h2>

		<table class="info-table">
			<tr>
				<th>주소</th>
				<td><?php echo esc_html( janggane_get_business_info( 'address' ) ); ?></td>
			</tr>
			<tr>
				<th>전화</th>
				<td><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', janggane_get_business_info( 'phone' ) ) ); ?>"><?php echo esc_html( janggane_get_business_info( 'phone' ) ); ?></a></td>
			</tr>
			<tr>
				<th>영업시간</th>
				<td><?php echo esc_html( janggane_get_business_info( 'hours' ) ); ?></td>
			</tr>
			<tr>
				<th>휴무일</th>
				<td><?php echo esc_html( janggane_get_business_info( 'closed_day' ) ); ?></td>
			</tr>
			<tr>
				<th>주차</th>
				<td>주차 가능 여부 확인 중 (TODO — PROJECT_BRIEF.md 8-3절)</td>
			</tr>
		</table>

		<div class="map-embed-placeholder">
			지도 임베드 준비 중 (네이버지도/카카오맵 링크 확정 후 삽입 — TODO)
		</div>
	</div>
</section>
