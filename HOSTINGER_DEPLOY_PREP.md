# HOSTINGER DEPLOY PREP — 업로드 준비 문서

## 1. 현재 전제

이 프로젝트는 울산 북구 호계동 흑염소 보양식 식당 홈페이지를 위한 WordPress 자체 PHP 테마 프로젝트다.
현재 단계는 기획/사진 정리 단계이며, Hostinger 운영 서버 업로드는 아직 실행하지 않는다.

- 프로젝트 경로: `/home/bourne/CLAUDE_WORKSPACE/PROJECTS/janggane-heukyeomso`
- GitHub 원격: `git@github.com:kim6410/janggane-heukyeomso.git`
- 테마 슬러그 후보: `janggane-heukyeomso`
- 배포 방식 후보: WordPress 테마 ZIP 업로드 또는 SSH/SFTP 선별 업로드
- Push/운영 업로드: 사용자 명시 승인 전 금지

## 2. 업로드 전 결정 필요 항목

| 항목 | 현재 상태 | 필요한 결정 |
| --- | --- | --- |
| Hostinger 사이트 | 미확정 | 신규 WordPress 설치인지 기존 설치인지 확인 |
| 도메인 | 미확정 | 독립 도메인, 임시 도메인, 서브도메인 중 선택 |
| WordPress 관리자 | 미확정 | 관리자 계정 생성/접속 확인 필요 |
| DB | Hostinger WordPress가 관리 | 별도 DB 설계 금지, WordPress 기본 DB 사용 |
| 게시판 | 미정 | WordPress 내부 게시판/문의 구조로 통합 여부 결정 |
| 사진 사용 동의 | 일부 미확정 | 손님 얼굴 사진은 동의 전 사용 금지 |
| 메뉴 가격 | 미확정 | 메뉴판 또는 사장님 확인 필요 |

## 3. Hostinger 권장 배포 구조

WordPress 설치 후 테마는 아래 경로에 배치한다.

```text
/home/<hostinger-user>/domains/<domain>/public_html/wp-content/themes/janggane-heukyeomso
```

운영 업로드 전에는 반드시 아래 순서로 진행한다.

1. 로컬 Git 상태 확인
2. 변경 파일만 명시 경로로 커밋
3. GitHub Push 성공 확인
4. Hostinger 현재 사이트 백업
5. 테마 ZIP 생성
6. Hostinger에 테마 업로드
7. WordPress 관리자에서 테마 활성화
8. PC/모바일 첫 화면, 메뉴, 전화, 지도, 관리자 옵션 검증
9. 업무일지 작성

## 4. 배포 패키지 제외 원칙

배포 패키지에는 아래 파일을 넣지 않는다.

- `assets/photos_original/` 원본 전체
- `assets/menu_reference/` 메뉴판 원본
- `.git/`
- `.env`, `.key`, `.pem`, `credentials.json`, `secrets.json`
- `_release/`
- 작업 문서 전체를 운영 테마에 불필요하게 포함하지 않는다.

배포 패키지에는 아래만 포함한다.

- WordPress 테마 PHP 파일
- `style.css`
- 필요한 CSS/JS
- 실제 홈페이지에 쓰기로 확정한 웹 최적화 이미지
- 필요한 경우 `README_THEME.md` 같은 최소 안내 문서

## 5. 이미지 운영 원칙

| 폴더 | 용도 | Git/배포 정책 |
| --- | --- | --- |
| `assets/photos_original` | 원본 보관 | Git 제외, 배포 제외 |
| `assets/photos_selected` | 후보 선별본 | 필요 시 선택 커밋, 배포 기본 제외 |
| `assets/photos_edited` | 편집/합성 파생본 | 승인 후 선택 사용 |
| `assets/photos_web` | 실제 웹용 최적화본 | 최종 사용본만 배포 후보 |
| `assets/images` | 테마 정적 이미지 | 배포 포함 가능 |

원본 사진은 절대 덮어쓰지 않는다.
칙칙한 배경 보정, 자연 배경 합성, 리사이즈, 압축은 파생본만 만든다.

## 6. 업로드 전 검증 명령

```bash
git status --short
git log --oneline -5
find assets/photos_original -maxdepth 1 -type f ! -name .gitkeep | wc -l
find assets/photos_web -maxdepth 1 -type f ! -name .gitkeep | wc -l
rg -n "password|passwd|secret|token|api[_-]?key|BEGIN .*PRIVATE KEY|ssh-rsa" . --glob !assets/photos_original/** --glob !_release/**
```

비밀값 스캔은 오탐이 있을 수 있으므로 결과를 확인하고, 실제 비밀값이면 커밋/업로드를 중단한다.

## 7. 테마 ZIP 생성 기준

테마 코드가 작성된 뒤 아래 스크립트로 Hostinger 업로드용 ZIP을 만든다.

```bash
bash tools/build_hostinger_theme_package.sh
```

생성 위치:

```text
_release/janggane-heukyeomso-theme-YYYYMMDD_HHMMSS.zip
```

현재는 테마 코드가 없으므로 ZIP 생성은 준비만 해둔다.

## 8. 운영 업로드 금지 조건

아래 중 하나라도 해당하면 Hostinger 업로드를 진행하지 않는다.

- Git 상태가 정리되지 않음
- GitHub Push가 완료되지 않음
- WordPress 설치 경로가 미확정
- 관리자 로그인 확인 전
- 메뉴/가격/전화/주소가 임시값인 상태
- 손님 얼굴 사진 동의 미확인
- PC/모바일 로컬 검증 미완료
- 백업 경로 미확보

## 9. 아침 확인 목록

- Hostinger에 새 WordPress 설치를 만들지, 기존 설치를 쓸지 결정
- 도메인 또는 임시 도메인 결정
- WordPress 관리자 계정 접속 가능 여부 확인
- 메뉴판/가격/영업시간/휴무/주차 정보 확보
- 사진 후보 20장 중 실제 사용 승인

## 10. 기존 Hostinger 사이트와 혼동 방지 규칙

이 프로젝트는 기존 SSU PRINT, WordPress 테스트 사이트, 다른 고객 사이트와 절대 섞지 않는다.
아래 값은 참고 기록으로만 사용하고, 장가네 흑염소 배포 대상으로 사용하지 않는다.

사용 금지 대상 예시:

- `ssuprint.com`
- `wp.ssuprint.com`
- `olive-koala-465874.hostingersite.com`
- `lightcoral-stingray-175078.hostingersite.com`
- `/home/u161311303/domains/ssuprint.com/public_html`
- 기존 SSU PRINT WordPress 설치 경로
- 기존 SSU PRINT DB, 관리자 계정, 업로드 폴더

장가네 흑염소 배포는 아래 정보가 새로 확정된 뒤에만 진행한다.

| 항목 | 확정 전 기본값 |
| --- | --- |
| Hostinger 계정 | 미확정 |
| 도메인/임시도메인 | 미확정 |
| WordPress document root | 미확정 |
| WordPress 관리자 URL | 미확정 |
| WordPress 관리자 계정 | 미확정 |
| DB 이름 | Hostinger 자동 생성값 확인 전까지 미확정 |
| 백업 경로 | 미확정 |

작업자가 Hostinger에 접속했을 때 아래 문자열이 보이면 즉시 중단하고 사용자에게 확인한다.

```text
ssuprint
olive-koala
lightcoral-stingray
wp.ssuprint.com
```

업로드 전 확인 문장:

```text
이 배포 대상은 장가네 흑염소 전용 Hostinger WordPress 설치이며, SSU PRINT 및 다른 기존 사이트가 아니다.
```

이 문장을 사용자가 명시적으로 확인하기 전에는 실제 업로드, 파일 삭제, 덮어쓰기, 테마 활성화를 하지 않는다.
