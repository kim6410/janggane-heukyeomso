<?php
/**
 * 프론트 페이지 — template-parts를 정해진 순서대로 include 합니다.
 * 섹션 순서(1~10)는 CONTENT_PLAN.md 3절 / PROJECT_BRIEF.md 6절과 동일합니다.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="main-content">
	<?php get_template_part( 'template-parts/hero' ); ?>
	<?php get_template_part( 'template-parts/menu' ); ?>
	<?php get_template_part( 'template-parts/farm-story' ); ?>
	<?php get_template_part( 'template-parts/side-dishes' ); ?>
	<?php get_template_part( 'template-parts/cooking-process' ); ?>
	<?php get_template_part( 'template-parts/gallery' ); ?>
	<?php get_template_part( 'template-parts/reviews' ); ?>
	<?php get_template_part( 'template-parts/location' ); ?>
	<?php get_template_part( 'template-parts/faq' ); ?>
</main>

<?php
// contact-floating.php는 footer.php에서 공통으로 include 됩니다 (상시 노출 CTA이므로).
get_footer();
