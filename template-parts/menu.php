<?php
/**
 * 2. 대표 메뉴 — 흑염소탕/흑염소전골/흑염소불고기 3종.
 * 데이터 출처: janggane_get_menu_items() (functions.php, 현재는 임시 배열).
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$menu_items = janggane_get_menu_items();
$web_dir    = get_template_directory_uri() . '/assets/photos_web/';
?>
<section id="menu-section" class="section">
	<div class="container">
		<span class="section-eyebrow">대표 메뉴</span>
		<h2>흑염소탕 · 흑염소전골 · 흑염소불고기</h2>
		<p class="section-desc">농장에서 직접 키운 흑염소로 정성껏 끓인 대표 메뉴입니다.</p>

		<div class="menu-grid">
			<?php foreach ( $menu_items as $item ) : ?>
				<div class="menu-card">
					<?php if ( ! empty( $item['image'] ) ) : ?>
						<div class="menu-card__image">
							<img src="<?php echo esc_url( $web_dir . $item['image'] ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?> (사진 내용 확인 전 임시 배치)">
						</div>
					<?php else : ?>
						<div class="menu-card__image gallery-grid__item--placeholder" style="aspect-ratio:4/3;">사진 준비 중</div>
					<?php endif; ?>
					<div class="menu-card__body">
						<div class="menu-card__name"><?php echo esc_html( $item['name'] ); ?></div>
						<div class="menu-card__price"><?php echo esc_html( $item['price'] ); ?></div>
						<p class="menu-card__desc"><?php echo esc_html( $item['desc'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="menu-note">
			메뉴명·가격·인분 기준·사진은 모두 확정 전 임시값입니다 (PROJECT_BRIEF.md 8-4절 참고).
			실제 메뉴판 확인 후 교체 예정입니다.
		</div>
	</div>
</section>
