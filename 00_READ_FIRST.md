# Janggane Heukyeomso Project — 00 READ FIRST

## 목적

울산 북구 호계동 흑염소 보양식 식당 "정자골 장가네 농장직영 흑염소 보양탕"의
WordPress 자체 테마 홈페이지 제작 프로젝트다. 공용 규칙과 식당 전용 레퍼런스를 함께 따르는
첫 실제 지역식당 프로젝트다.

## 업체 요약 (최종 확정 전 — 임시값 포함)

- 상호 후보: 정자골 장가네 농장직영 흑염소 보양탕
- 짧은 호출명: 장가네 흑염소 / 정자골 흑염소
- 업종: 흑염소 보양식 (흑염소탕, 흑염소전골, 흑염소불고기)
- 현재 지역: 울산 북구 호계동 (이전 가능성 있음)
- 핵심 고객: 중장년층, 어르신, 부모님 모시고 오는 가족, 보양식 고객
- 차별점: 농장직영, 직접 손질한 재료, 직접 담근 깍두기·겉절이

## 현재 단계

**기획 문서 작성 완료. WordPress 코드(style.css, functions.php, header.php 등)는 아직 작성하지 않았다.**
사장님 확인(상호 확정, 질문 목록 회신)과 실제 사진 확보 이후 코드 작성 단계로 진행한다.

## 작업 규칙

- 전체 덮어쓰기 금지. 파일 단위로, 필요한 부분만 수정한다.
- `git add .` 금지. 커밋은 명시한 파일 경로만 스테이징한다.
- **Push는 사용자가 명시적으로 승인하기 전까지 실행하지 않는다.** 로컬 커밋까지만 진행한다.
- 비밀번호, 토큰, SSH 키, `.env` 내용을 조회하거나 파일에 기록하지 않는다.
- 운영 서버 변경 금지, Docker 중지/재시작 금지, DB 변경 금지.
- 다른 프로젝트(`StoryMaker_1` 등) 파일에 접근하지 않는다.
- 원본 사진(`assets/photos_original`)은 절대 삭제·이동·수정하지 않는다. 편집·배경 합성·최적화가
  필요하면 `assets/photos_edited`, `assets/photos_web` 등에 복사본만 새로 만든다. (이미지 파일은
  텍스트처럼 diff 기반 수정이 불가능하므로 이 예외를 둔다 — 단 원본 불변 원칙은 그대로 유지된다.)
- 손님 얼굴이 나온 사진은 사용 전 동의 여부를 확인한다. 동의 확인 전에는 사용하지 않는다.
- 헤더(`header.php`)와 푸터(`footer.php`)는 각 1개만 두고 모든 화면이 공통 사용한다. 화면마다
  복사해서 만들지 않는다.
- 관리자 로그인은 WordPress 기본 계정/Role·Capability 체계를 그대로 사용한다. 별도 관리자 로그인
  시스템을 만들지 않는다.
- 실제 후기·가격·서비스가 없으면 만들어내지 않는다. 없는 값은 임시값임을 문서에 명확히 표시한다.
- 보양식 관련 문구에서 의학적 효능을 단정하거나 질병 치료·면역력 치료처럼 표현하지 않는다.

## GitHub

- 저장소: `https://github.com/kim6410/janggane-heukyeomso.git`
- 로컬 경로: `/home/bourne/CLAUDE_WORKSPACE/PROJECTS/janggane-heukyeomso`
- 상태: `git init` + `origin` 연결 완료, 로컬 커밋 진행. **push는 사용자 승인 후에만 실행.**

## 먼저 읽을 문서

- `/home/bourne/CLAUDE_WORKSPACE/CLAUDE.md`
- `/home/bourne/CLAUDE_WORKSPACE/PROJECTS/sample-homepage/REFERENCE_지역업체_워드프레스.md` (공통 제작 규칙)
- `/home/bourne/CLAUDE_WORKSPACE/PROJECTS/sample-homepage/REFERENCE_지역식당_워드프레스.md` (식당 전용 규칙)
- `/home/bourne/CLAUDE_WORKSPACE/.claude/rules/seo-local-business.md`
- `/home/bourne/CLAUDE_WORKSPACE/.claude/rules/token-budget.md`
- 이 폴더의 `PROJECT_BRIEF.md`, `PHOTO_INVENTORY.md`, `CONTENT_PLAN.md`, `WORDPRESS_THEME_PLAN.md`

## Hostinger 업로드 준비 규칙

- Hostinger 업로드 전 `HOSTINGER_DEPLOY_PREP.md`를 먼저 읽는다.
- 운영 업로드는 사용자 명시 승인 전까지 실행하지 않는다.
- GitHub Push가 완료되지 않은 상태에서는 Hostinger 업로드를 진행하지 않는다.
- Hostinger WordPress 설치 경로, 관리자 로그인, 백업 경로가 확인되기 전에는 업로드하지 않는다.
- 원본 사진(`assets/photos_original`)과 메뉴 참고 원본(`assets/menu_reference`)은 Git/배포 패키지에서 제외한다.
- 웹용 최종 이미지만 `assets/photos_web`에 넣고 배포 후보로 삼는다.

## Hostinger 대상 격리 규칙

- 기존 `ssuprint.com`, `wp.ssuprint.com`, 과거 Hostinger 임시 도메인, 다른 고객 사이트 경로를 장가네 흑염소 배포 대상으로 사용하지 않는다.
- `/home/u161311303/domains/ssuprint.com/public_html`는 SSU PRINT 기록용 경로이며, 이 프로젝트 배포 대상으로 쓰지 않는다.
- 장가네 흑염소 전용 WordPress 설치 경로와 관리자 URL이 확인되기 전에는 Hostinger 업로드를 중단한다.
- Hostinger 접속 중 `ssuprint`, `olive-koala`, `lightcoral-stingray`, `wp.ssuprint.com` 문자열이 대상 경로/URL에 보이면 즉시 중단하고 사용자에게 확인한다.

## 참고: 이 프로젝트에는 두 개의 Claude 세션이 동시에 작업할 수 있다

1. Dell에서 네이티브로 실행되는 Claude Code 세션 (파일을 직접 열어 이미지도 볼 수 있음)
2. 클라우드에서 Claude Windows MCP(SSH 브릿지, 텍스트 전용)로 접속하는 세션

두 세션이 겹칠 수 있으므로, 작업 시작 전 항상 `git log --oneline -5`와 `git status --short`로 최신
상태를 다시 확인하고, 다른 세션이 이미 만든 내용을 덮어쓰지 않는다.
