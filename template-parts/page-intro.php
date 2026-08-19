<?php
/**
 * 상세 페이지 공통 인트로 (breadcrumb + H1 + 설명).
 * 상세 페이지(template-page-*.php)마다 반복해서 작성하지 않도록 공통 부품으로 분리했습니다.
 *
 * 사용법:
 * get_template_part( 'template-parts/page-intro', null, array(
 *     'label' => '메뉴소개',
 *     'desc'  => '설명 문구',
 * ) );
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$label = isset( $args['label'] ) ? $args['label'] : '';
$desc  = isset( $args['desc'] ) ? $args['desc'] : '';
?>
<section class="page-intro">
	<div class="container">
		<div class="page-intro__breadcrumb">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">홈</a> &gt; <?php echo esc_html( $label ); ?>
		</div>
		<h1><?php echo esc_html( $label ); ?></h1>
		<?php if ( $desc ) : ?>
			<p class="page-intro__desc"><?php echo esc_html( $desc ); ?></p>
		<?php endif; ?>
	</div>
</section>
