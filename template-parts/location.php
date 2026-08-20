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
				<td><?php echo esc_html( janggane_get_business_info( 'parking' ) ); ?></td>
			</tr>
		</table>

		<div class="map-embed">
			<div id="<?php echo esc_attr( janggane_get_business_info( 'kakao_roughmap_container_id' ) ); ?>" class="root_daum_roughmap root_daum_roughmap_landing"></div>
		</div>
		<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
		<script charset="UTF-8">
			new daum.roughmap.Lander({
				"timestamp" : "<?php echo esc_js( janggane_get_business_info( 'kakao_roughmap_timestamp' ) ); ?>",
				"key" : "<?php echo esc_js( janggane_get_business_info( 'kakao_roughmap_key' ) ); ?>",
				"mapWidth" : "640",
				"mapHeight" : "360"
			}).render();
		</script>
	</div>
</section>
