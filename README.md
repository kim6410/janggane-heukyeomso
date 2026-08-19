# 정자골 장가네 농장직영 흑염소 보양탕

울산 북구 호계동 흑염소 보양식 식당의 WordPress 자체 테마 홈페이지 제작 프로젝트입니다.

- GitHub: `https://github.com/kim6410/janggane-heukyeomso.git`
- 서버 경로: `/home/bourne/CLAUDE_WORKSPACE/PROJECTS/janggane-heukyeomso`
- 현재 단계: **기획 문서 작성 완료 + WordPress 테마 1차 화면 초안(껍데기) 작성 완료 — 실제 정보/사진 확정 대기**

## 문서 구성

| 파일 | 내용 |
| --- | --- |
| `00_READ_FIRST.md` | 작업 전 필독 — 업체 요약, 작업 규칙, 먼저 읽을 규칙 |
| `PROJECT_BRIEF.md` | 프로젝트 개요, 상호/네이밍, 핵심 컨셉, 사이트 구조, 질문 목록 |
| `PHOTO_INVENTORY.md` | 사진 분류 기준 (대표메뉴/농장재료/조리과정/반찬/매장분위기/보류) |
| `CONTENT_PLAN.md` | 핵심 키워드, 문구 톤, 섹션별 카피 방향, SEO title/description/H1 후보 |
| `WORDPRESS_THEME_PLAN.md` | 테마 파일 구조, 관리자 입력 항목, 관리자 로그인 원칙, 완료 기준 |
| `preview/index.html` | 브라우저에서 바로 확인 가능한 정적 미리보기 (WordPress 없이 디자인/레이아웃 확인용) |

## 참고한 공용 규칙

- `/home/bourne/CLAUDE_WORKSPACE/CLAUDE.md`
- `/home/bourne/CLAUDE_WORKSPACE/PROJECTS/sample-homepage/REFERENCE_지역업체_워드프레스.md`
- `/home/bourne/CLAUDE_WORKSPACE/PROJECTS/sample-homepage/REFERENCE_지역식당_워드프레스.md`

## 진행 상태

- [x] 기획 문서 6종 작성
- [ ] 사장님 확인 (상호 확정, 질문 목록 회신)
- [ ] 실제 사진 확보 및 `PHOTO_INVENTORY.md` 매핑
- [x] WordPress 테마 1차 화면 초안(껍데기) 작성 완료 (`preview/index.html`로 브라우저 확인 가능, 상호/연락처/가격 등 임시값 다수 포함)
- [ ] 사장님 실제 정보(전화/주소/영업시간/가격 등) 확보 및 반영, 사진 추가 매핑

## Git / GitHub 안내

이 폴더는 로컬 git 저장소로 초기화되고 GitHub 원격(`origin`)이 연결되어 있습니다.
**Push는 사용자가 직접 승인하기 전까지 실행하지 않습니다.** 현재까지는 로컬 커밋까지만 진행합니다.

## Hostinger 업로드 준비

Hostinger 배포는 아직 실행하지 않습니다. 업로드 전 준비와 금지 조건은 `HOSTINGER_DEPLOY_PREP.md`를 따릅니다.

핵심 원칙:

- 원본 사진(`assets/photos_original`)은 Git과 배포 패키지에서 제외합니다.
- 실제 홈페이지용 이미지는 `assets/photos_web`에 최종본만 둡니다.
- 테마 코드가 완성된 뒤 `tools/build_hostinger_theme_package.sh`로 업로드용 ZIP을 생성합니다.
- GitHub Push와 Hostinger 백업 전에는 운영 업로드를 진행하지 않습니다.

### 기존 Hostinger 사이트와 분리

이 프로젝트는 기존 SSU PRINT나 다른 Hostinger 사이트와 분리해서 배포합니다.
`ssuprint.com`, `wp.ssuprint.com`, 과거 Hostinger 임시 도메인, 기존 SSU PRINT document root는 장가네 흑염소 배포 대상이 아닙니다.
