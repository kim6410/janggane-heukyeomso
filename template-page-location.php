<?php
/**
 * Template Name: 오시는길
 *
 * 위치/영업정보 상세 페이지. template-parts/location.php를 재사용하고,
 * 네이버지도/카카오맵 버튼 자리를 추가합니다(둘 다 map_url TODO 값을 임시로 공유).
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
			'label' => '오시는길',
			'desc'  => '주소·지도·주차 정보는 확정 전 임시값입니다.',
		)
	);
	get_template_part( 'template-parts/location' );
	?>
	<section class="section">
		<div class="container">
			<div class="map-buttons">
				<a class="btn btn--outline" href="<?php echo esc_url( janggane_get_business_info( 'map_url_naver' ) ); ?>" target="_blank" rel="noopener">네이버지도로 보기</a>
				<a class="btn btn--outline" href="<?php echo esc_url( janggane_get_business_info( 'map_url' ) ); ?>" target="_blank" rel="noopener">카카오맵으로 보기</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
