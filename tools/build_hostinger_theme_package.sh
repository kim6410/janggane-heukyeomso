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

required=(style.css functions.php header.php footer.php front-page.php)
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

command -v rsync >/dev/null 2>&1 || { echo "ERROR: rsync is required" >&2; exit 1; }
command -v zip >/dev/null 2>&1 || { echo "ERROR: zip is required" >&2; exit 1; }

mkdir -p "$THEME_DIR"

rsync -a \
  --exclude=".git/" \
  --exclude="_release/" \
  --exclude="assets/photos_original/" \
  --exclude="assets/menu_reference/" \
  --exclude="assets/photos_selected/" \
  --exclude="assets/photos_edited/" \
  --exclude="*.bak" \
  --exclude="*.bak_*" \
  --exclude=".env" \
  --exclude=".env.*" \
  --exclude="*.pem" \
  --exclude="*.key" \
  --exclude="credentials.json" \
  --exclude="secrets.json" \
  ./ "$THEME_DIR/"

cd "$BUILD_DIR"
zip -qr "$ZIP_PATH" "$THEME_SLUG"
cd "$ROOT_DIR"
rm -rf "$BUILD_DIR"

sha256sum "$ZIP_PATH" > "$ZIP_PATH.sha256"
printf "Created: %s\n" "$ZIP_PATH"
printf "SHA-256: %s\n" "$(cut -d" " -f1 "$ZIP_PATH.sha256")"
