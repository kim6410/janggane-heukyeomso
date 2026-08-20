<?php
/**
 * 공통 푸터 (1개만 존재, 모든 화면이 이 파일을 공유합니다).
 */
if ( ! defined( ABSPATH ) ) {
	exit;
}
?>

	<footer class="site-footer">
		<div class="container footer-grid">
			<div>
				<div class="footer-title"><?php echo esc_html( janggane_get_business_info( brand_name ) ); ?></div>
				<div class="footer-muted">
					<?php echo esc_html( janggane_get_business_info( address ) ); ?><br>
					<?php echo esc_html( janggane_get_business_info( phone ) ); ?>
				</div>
			</div>
			<div>
				<strong>영업 정보</strong><br>
				<span class="footer-muted">
					<?php echo esc_html( janggane_get_business_info( hours ) ); ?><br>
					<?php echo esc_html( janggane_get_business_info( closed_day ) ); ?>
				</span>
			</div>
			<div>
				<strong>관리</strong><br>
				<a href="<?php echo esc_url( wp_login_url() ); ?>">WordPress 관리자 로그인</a>
				<div class="site-footer__notice">
					상호·연락처·가격·영업정보는 확정 전 임시값이 포함되어 있으며, 사장님 확인 후 실제 값으로 교체됩니다.
				</div>
			</div>
		</div>
	</footer>

	<?php get_template_part( template-parts/contact-floating ); ?>

	<?php wp_footer(); ?>
</body>
</html>
