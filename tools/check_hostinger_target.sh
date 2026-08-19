#!/usr/bin/env bash
set -euo pipefail

TARGET="${1:-}"
if [[ -z "$TARGET" ]]; then
  echo "Usage: $0 <hostinger-target-path-or-url>" >&2
  exit 2
fi

blocked=(
  "ssuprint"
  "wp.ssuprint.com"
  "olive-koala"
  "lightcoral-stingray"
  "/home/u161311303/domains/ssuprint.com/public_html"
)

for word in "${blocked[@]}"; do
  if [[ "$TARGET" == *"$word"* ]]; then
    echo "BLOCKED: target appears to be an existing/non-janggane Hostinger site: $word" >&2
    exit 1
  fi
done

echo "OK: target string does not match known blocked Hostinger sites. Still verify with user before upload."
