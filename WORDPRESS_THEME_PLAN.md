# WORDPRESS THEME PLAN — 구조 초안 (코드 없음)

## 1. 구현 원칙

- WordPress 자체 PHP 테마로 개발한다. Elementor, 블록 테마는 기본안으로 채택하지 않는다.
- `header.php`, `footer.php`는 **각 1개만** 두고 모든 화면(향후 게시판 포함)이 공통 사용한다.
  화면마다 헤더/푸터를 복사해서 조금씩 고치는 방식은 금지한다.
- 전화번호, 주소, 영업시간, 지도 링크는 WordPress 옵션 한 곳에서만 관리한다. 프론트 페이지, 문의
  페이지, footer, 구조화 데이터(JSON-LD)가 모두 같은 옵션 값을 읽는다.
- 관리자 로그인은 **WordPress 기본 로그인과 Role/Capability 체계를 그대로 사용한다.**
  별도 관리자 로그인 시스템은 만들지 않는다.

## 2. 테마 파일 구조 (초안, 코드 미작성)

`REFERENCE_지역식당_워드프레스.md`의 식당 전용 구조를 그대로 채택합니다.

```
janggane-heukyeomso (테마 폴더)
├── style.css                       # 테마 정보 헤더 + 디자인 토큰
├── functions.php                   # 테마 지원, 스크립트/스타일 등록, 옵션 페이지, CPT 등록
├── header.php                      # 공통 헤더 1개
├── footer.php                      # 공통 푸터 1개
├── front-page.php                  # 아래 template-parts를 순서대로 include
├── template-parts/
│   ├── hero.php                    # 1. Hero
│   ├── menu.php                    # 2. 대표 메뉴
│   ├── farm-story.php              # 3. 농장직영/재료 이야기
│   ├── side-dishes.php             # 4. 직접 담근 반찬
│   ├── cooking-process.php         # 5. 조리 과정
│   ├── gallery.php                 # 6. 매장 분위기
│   ├── reviews.php                 # 7. 후기/단골 이야기
│   ├── location.php                # 8. 위치와 영업정보
│   ├── faq.php                     # 9. FAQ
│   └── contact-floating.php        # 10. 상시 노출 CTA (전화/카카오톡/지도/메뉴)
└── assets/
    ├── css/
    ├── js/
    └── images/
```

원 요청에 있던 `template-parts` 8개(hero/menu/farm-story/side-dishes/gallery/location/
contact-floating/faq) 구조에, REFERENCE_지역식당 기준의 `cooking-process.php`(조리 과정)와
`reviews.php`(후기)를 추가했습니다. 이유는 5절 섹션 구성(10단계)에서 "조리 과정"과 "후기"를
"매장 분위기"와 분리했기 때문입니다. 파일 2개를 줄이고 싶다면 `cooking-process.php`는
`farm-story.php`에, `reviews.php`는 `gallery.php`에 합치는 축소안도 가능합니다 (결정 필요 항목).

## 3. 관리자 입력 항목 (WordPress 관리자에서 수정 가능)

| 항목 | 권장 관리 방식 | 비고 |
| --- | --- | --- |
| 상호 (사업자용/노출용) | 옵션 페이지 | 두 값을 분리 관리 |
| 전화번호 | 옵션 페이지 | CTA, footer, 구조화 데이터가 같은 값을 씀 |
| 카카오톡/채널 링크 | 옵션 페이지 | 값이 없으면 버튼 숨김 처리 |
| 주소 / 지도 링크 | 옵션 페이지 | 네이버지도·카카오맵 우선 |
| 영업시간 / 휴무 | 옵션 페이지 | 공휴일 안내 문구 별도 필드 |
| 주차 안내 | 옵션 페이지 | 지역 식당 전환에 중요 |
| 대표 메뉴 + 가격 | CPT `menu` 또는 옵션 repeater | 메뉴명, 설명, 가격, 인분 기준, 사진 |
| 메뉴/갤러리 사진 | 미디어 라이브러리 | alt 텍스트 필수 (실제 음식/장면 설명) |
| 반찬/재료 이야기 | 페이지 섹션 필드 | 계절별 변경 가능하게 |
| 후기 | CPT 또는 repeater | 실제 후기만 사용 |
| FAQ | CPT 또는 repeater | 예약/포장/단체/주차 중심 |

원 요청의 "메뉴/가격/전화번호/주소/영업시간/지도/사진/FAQ" 8개 항목이 모두 위 표에 포함되어
관리자에서 수정 가능하도록 설계됩니다.

## 4. 관리자 로그인 원칙

- 별도 관리자 로그인 화면이나 인증 시스템을 새로 만들지 않는다.
- WordPress 관리자 계정과 Role/Capability 체계를 그대로 사용한다.
- 사장님/직원이 수정할 필드는 텍스트, 사진, 가격 중심의 단순한 형태로 제한한다.
- 비밀번호 원문을 별도 DB나 테마 파일에 저장하지 않는다.
- API key, 토큰, 서버 비밀번호를 테마 파일에 넣지 않는다.

## 5. 완료 기준 (코드 작성 단계에서 검증할 항목)

- [ ] 모바일 첫 화면에서 상호, 대표 음식, 전화/길찾기 CTA가 보인다.
- [ ] 메뉴와 가격이 관리자에서 수정 가능하다.
- [ ] 전화번호, 주소, 영업시간이 한 곳(옵션 페이지)에서 관리된다.
- [ ] 공통 헤더와 푸터가 모든 페이지에 동일하게 적용된다.
- [ ] 사진 alt 텍스트가 실제 음식/장면을 설명한다.
- [ ] 과장된 건강 효능 문구를 쓰지 않는다.
- [ ] 상호와 SEO 문구가 이전 가능성을 고려해 분리 설계되어 있다.
- [ ] 실제 사용 가능한 사진과 추가 촬영이 필요한 사진이 `PHOTO_INVENTORY.md`에서 구분되어 있다.

## 6. 다음 단계 (사용자 승인 후 진행, 현재 미실행)

1. `PROJECT_BRIEF.md` 8절 질문 목록 회신 확인
2. 실제 사진 업로드 → `PHOTO_INVENTORY.md` 매핑
3. 승인 후 `style.css`, `functions.php`, `header.php`, `footer.php`부터 테마 뼈대 생성
4. `template-parts/` 10개 파일 순차 생성
5. 옵션 페이지 및 CPT 연결
6. 데스크톱/모바일 검증, `WORK_LOGS` 기록
