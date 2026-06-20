# AGENTS.md

## What this is
PHP marketing site (SomaWebV1). No build step, no package manager, no framework. Tailwind via CDN.

## Structure
- `index.php` — entrypoint, includes partials via `require`
- `partials/head.php` — `<head>` with Tailwind CDN config (custom theme: `ink`, `paper`, `fog`, `lime`, `lime2` colors; Plus Jakarta Sans font)
- `partials/site-header.php` — responsive nav; hamburger button exists but **JS toggle is missing** (needs implementation)
- `partials/page-index-sections.php` — all page sections (hero, about, services, case study)
- `partials/site-footer.php` — footer
- `assets/img/` — static images only
- `index.html.backup` — original static HTML reference (uses Manrope font, not Plus Jakarta Sans)

## Dev commands
- **Local dev**: `docker compose up --build -d` → `http://localhost:8000`
- **Stop**: `docker compose down`
- **No build/lint/test** — edit PHP/Tailwind classes, refresh browser

## Key conventions
- Tailwind theme config lives in `partials/head.php:17-33`. All custom colors/fonts defined there.
- Outer container must have classes `grain noise` — these add the background texture via CSS in `head.php:37-52`.
- `page-index-sections.php` is monolithic (~417 lines). Split into per-section partials if it grows further.
- No `srcset`/`sizes` on images — add if responsive image quality matters.
- `lang="id"` on `<html>` — Indonesian locale.

## Gotchas
- Font changed from `Manrope` (backup) to `Plus Jakarta Sans` (live). Don't revert.
- Dockerfile uses `php:8.2-cli` with `php -S` built-in server — fine for dev, not production.
- No `.gitignore`, no `.dockerignore` — all files get copied into Docker image.
- No automated tests, no CI, no linting configured.
