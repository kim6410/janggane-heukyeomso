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
- 헤더(`header.php`)와 푸터(`footer.php`)는 각 1개만 두고 모든 화면이 공통 사용한다.
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
