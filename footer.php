<?php
/**
 * 공통 푸터 (1개만 존재, 모든 화면이 이 파일을 공유합니다).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	<footer class="site-footer">
		<div class="container">
			<div><?php echo esc_html( janggane_get_business_info( 'brand_name' ) ); ?></div>
			<div><?php echo esc_html( janggane_get_business_info( 'address' ) ); ?> · <?php echo esc_html( janggane_get_business_info( 'phone' ) ); ?></div>
			<div class="site-footer__notice">
				이 페이지는 1차 화면 초안입니다. 상호·연락처·가격·영업정보는 확정 전 임시값이 포함되어
				있으며(TODO 표시), 사장님 확인 후 실제 값으로 교체됩니다.
			</div>
		</div>
	</footer>

	<?php get_template_part( 'template-parts/contact-floating' ); ?>

	<?php wp_footer(); ?>
</body>
</html>
