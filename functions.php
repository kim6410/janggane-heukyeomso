<?php
/**
 * 장가네 흑염소 테마 — functions.php (1차 화면 초안 단계)
 *
 * 이 파일은 "코드 작성 단계"의 최소 뼈대입니다. 아래 TODO 항목들은
 * PROJECT_BRIEF.md 8절 질문 목록 회신과 실제 WordPress 설치 이후에 채웁니다.
 *
 * 절대 원칙(00_READ_FIRST.md / WORDPRESS_THEME_PLAN.md):
 * - header.php / footer.php는 각 1개만 두고 모든 화면이 공통 사용한다.
 * - 관리자 로그인은 WordPress 기본 로그인 + Role/Capability 그대로 사용한다.
 *   별도 로그인 시스템을 만들지 않는다.
 * - 비밀번호/토큰/API key를 이 파일에 하드코딩하지 않는다.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // 직접 접근 금지.
}

/**
 * 테마 기본 지원 등록.
 */
function janggane_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

	register_nav_menus(
		array(
			'primary' => __( '주 메뉴', 'janggane-heukyeomso' ),
		)
	);
}
add_action( 'after_setup_theme', 'janggane_theme_setup' );

/**
 * CSS / JS 등록.
 * 실제 디자인은 style.css가 아니라 assets/css/main.css에 있습니다
 * (style.css는 WordPress 테마 인식용 헤더 정보만 담고 있음).
 */
function janggane_theme_assets() {
	$theme_uri     = get_template_directory_uri();
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'janggane-main', $theme_uri . '/assets/css/main.css', array(), $theme_version );
	wp_enqueue_script( 'janggane-main', $theme_uri . '/assets/js/main.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'janggane_theme_assets' );

/**
 * 업체 기본 정보(전화번호/주소/영업시간/지도 링크 등) 옵션 값 헬퍼.
 *
 * TODO: 지금은 WordPress 옵션 페이지가 아직 없어서 임시값을 반환합니다.
 * 옵션 페이지가 만들어지면 이 함수 내부만 get_option() 호출로 교체하면 되고,
 * 템플릿(header.php, footer.php, template-parts/*.php) 쪽은 수정할 필요가 없도록
 * 일부러 이 헬퍼 함수를 통해서만 값을 읽게 설계했습니다.
 *
 * @param string $key 조회할 항목 키.
 * @return string
 */
function janggane_get_business_info( $key ) {
	// TODO(임시값 — WordPress 옵션 페이지 연결 전):
	$defaults = array(
		'phone'          => '000-0000-0000', // TODO: 실제 전화번호로 교체.
		'address'        => '울산 북구 호계동 (정확한 주소 확인 필요)', // TODO.
		'map_url'        => '#map-미설정', // TODO: 네이버지도/카카오맵 링크.
		'kakao_url'      => '', // TODO: 값이 비어 있으면 카카오톡 버튼을 숨긴다.
		'hours'          => '영업시간 확인 중 (사장님 확인 필요)', // TODO.
		'closed_day'     => '휴무일 확인 중', // TODO.
		'brand_name'     => '정자골 장가네 농장직영 흑염소 보양탕',
		'brand_name_short' => '장가네 흑염소',
	);

	return isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
}

/**
 * 대표 메뉴 데이터.
 *
 * TODO: 지금은 코드에 임시 배열로 있습니다. 이후 CPT `menu` 또는
 * ACF 같은 repeater 필드로 옮겨 관리자에서 직접 수정 가능하게 합니다
 * (WORDPRESS_THEME_PLAN.md 3절 "대표 메뉴 + 가격" 항목 참고).
 *
 * @return array
 */
function janggane_get_menu_items() {
	// TODO(임시값 — 가격/설명 확정 전, PROJECT_BRIEF.md 8-4 참고):
	return array(
		array(
			'name'  => '흑염소탕',
			'price' => '가격 확인 중 (TODO)',
			'desc'  => '농장에서 직접 키운 흑염소로 깊게 끓인 보양탕입니다. (문구 초안, CONTENT_PLAN.md 3-2 참고)',
			'image' => 'menu-01.jpg',
		),
		array(
			'name'  => '흑염소전골',
			'price' => '가격 확인 중 (TODO)',
			'desc'  => '재료를 아낌없이 넣고 끓인 든든한 전골입니다. (문구 초안, 실제 사진 확보 전)',
			'image' => '',
		),
		array(
			'name'  => '흑염소불고기',
			'price' => '가격 확인 중 (TODO)',
			'desc'  => '불맛과 양념이 어우러진 흑염소불고기입니다. (문구 초안, 실제 사진 확보 전)',
			'image' => '',
		),
	);
}

/**
 * 향후 확장 메모 (지금 단계에서는 구현하지 않음, TODO만 남김):
 * - CPT `menu` 등록: 메뉴명/가격/인분/사진을 관리자에서 직접 관리하고 싶을 때 위
 *   janggane_get_menu_items() 를 register_post_type() 기반 쿼리로 교체.
 * - CPT `faq`, `review`: FAQ/후기도 같은 방식으로 CPT 또는 repeater로 이전.
 * - 옵션 페이지: add_menu_page()/add_options_page() 로 "장가네 흑염소 설정" 관리자
 *   메뉴를 만들고, 위 janggane_get_business_info() 가 그 옵션 값을 읽도록 연결.
 */
