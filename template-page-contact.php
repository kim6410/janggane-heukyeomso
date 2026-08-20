<?php
/**
 * Template Name: 예약문의
 *
 * 예약/문의 상세 페이지. 전화 예약(큰 버튼), 카카오톡 문의(링크 있을 때만 노출),
 * 영업시간/휴무/단체 예약 여부를 안내합니다. 전부 janggane_get_business_info()를
 * 통해서만 값을 읽어 나중에 옵션 페이지로 교체할 때 이 파일은 손댈 필요가 없습니다.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$phone     = janggane_get_business_info( 'phone' );
$kakao_url = janggane_get_business_info( 'kakao_url' );
?>
<main id="main-content">
	<?php
	get_template_part(
		'template-parts/page-intro',
		null,
		array(
			'label' => '예약문의',
			'desc'  => '전화 또는 카카오톡으로 문의해 주세요. 영업시간·휴무·단체 예약은 확인 중입니다.',
		)
	);
	?>
	<section class="section">
		<div class="container">
			<div class="contact-detail">
				<div class="contact-detail__cta">
					<a class="btn btn--primary" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $phone ) ); ?>">
						<svg class="icon-tel" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2z"/></svg> 전화로 예약하기 (<?php echo esc_html( $phone ); ?>)
					</a>
					<?php if ( ! empty( $kakao_url ) ) : ?>
						<a class="btn btn--outline" href="<?php echo esc_url( $kakao_url ); ?>">💬 카카오톡으로 문의하기</a>
					<?php else : ?>
						<div class="menu-note">카카오톡 채널 링크는 아직 확정되지 않았습니다 (TODO).</div>
					<?php endif; ?>
				</div>
				<table class="info-table">
					<tr>
						<th>영업시간</th>
						<td><?php echo esc_html( janggane_get_business_info( 'hours' ) ); ?></td>
					</tr>
					<tr>
						<th>휴무일</th>
						<td><?php echo esc_html( janggane_get_business_info( 'closed_day' ) ); ?></td>
					</tr>
					<tr>
						<th>단체 예약</th>
						<td>단체 예약 가능 여부와 최소 인원을 확인 중입니다 (TODO)</td>
					</tr>
				</table>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
