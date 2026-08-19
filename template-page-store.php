<?php
/**
 * Template Name: 매장안내
 *
 * 매장 분위기/좌석 안내 상세 페이지. template-parts/gallery.php를 재사용하고,
 * 좌석/단체석 안내 표를 추가합니다. 손님 얼굴 사진은 동의 확인 전까지 미사용
 * 원칙이 gallery.php의 안내 문구에 이미 포함되어 있습니다.
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
			'label' => '매장안내',
			'desc'  => '어르신, 가족, 단체 손님도 편하게 식사할 수 있는 공간입니다.',
		)
	);
	get_template_part( 'template-parts/gallery' );
	?>
	<section class="section section--alt">
		<div class="container">
			<h2>좌석 안내</h2>
			<table class="info-table">
				<tr>
					<th>좌석 형태</th>
					<td>좌석 구성 확인 중 (홀/룸 여부 등, TODO — PROJECT_BRIEF.md 8-3절 참고)</td>
				</tr>
				<tr>
					<th>단체 손님</th>
					<td>단체석 가능 여부와 수용 인원을 확인 중입니다 (TODO)</td>
				</tr>
				<tr>
					<th>어르신·가족 동반</th>
					<td>어르신·가족 단위 손님이 편하게 앉을 수 있는 좌석을 우선 안내할 예정입니다.</td>
				</tr>
			</table>
		</div>
	</section>
</main>
<?php get_footer(); ?>
