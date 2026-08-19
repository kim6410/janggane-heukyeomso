#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
THEME_SLUG="janggane-heukyeomso"
STAMP="$(date +%Y%m%d_%H%M%S)"
RELEASE_DIR="$ROOT_DIR/_release"
BUILD_DIR="$RELEASE_DIR/build_$STAMP"
THEME_DIR="$BUILD_DIR/$THEME_SLUG"
ZIP_PATH="$RELEASE_DIR/${THEME_SLUG}-theme-${STAMP}.zip"

cd "$ROOT_DIR"

required=(style.css functions.php header.php footer.php front-page.php assets/css/main.css assets/js/main.js)
missing=()
for file in "${required[@]}"; do
  if [[ ! -f "$file" ]]; then
    missing+=("$file")
  fi
done

if (( ${#missing[@]} > 0 )); then
  printf "ERROR: theme code is not ready. Missing files:\n" >&2
  printf " - %s\n" "${missing[@]}" >&2
  exit 1
fi

command -v zip >/dev/null 2>&1 || { echo "ERROR: zip is required" >&2; exit 1; }

rm -rf "$BUILD_DIR"
mkdir -p "$THEME_DIR/assets/css" "$THEME_DIR/assets/js" "$THEME_DIR/assets/images" "$THEME_DIR/assets/photos_web" "$THEME_DIR/template-parts"

cp style.css functions.php header.php footer.php front-page.php "$THEME_DIR/"
cp assets/css/main.css "$THEME_DIR/assets/css/"
cp assets/js/main.js "$THEME_DIR/assets/js/"
cp template-parts/*.php "$THEME_DIR/template-parts/"

if [[ -d assets/images ]]; then
  find assets/images -maxdepth 1 -type f ! -name .gitkeep -exec cp {} "$THEME_DIR/assets/images/" \;
fi

if [[ -d assets/photos_web ]]; then
  find assets/photos_web -maxdepth 1 -type f ! -name .gitkeep -exec cp {} "$THEME_DIR/assets/photos_web/" \;
fi

cd "$BUILD_DIR"
zip -qr "$ZIP_PATH" "$THEME_SLUG"
cd "$ROOT_DIR"
rm -rf "$BUILD_DIR"

sha256sum "$ZIP_PATH" > "$ZIP_PATH.sha256"
printf "Created: %s\n" "$ZIP_PATH"
printf "SHA-256: %s\n" "$(cut -d" " -f1 "$ZIP_PATH.sha256")"
