# AGENTS.md

## Project Overview

SanTa Homes is a bilingual (Spanish/English) real estate website for a vacation rental / housing business in Aguascalientes, Mexico. The site showcases properties (houses) with photo galleries, availability info, and contact forms.

The site has evolved from Webflow-exported static HTML to a PHP-based architecture with server-side internationalization (gettext). Legacy Webflow pages still exist alongside the newer hand-coded PHP pages.

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Markup | HTML5 + PHP templating |
| Styling | CSS3 (`css/main.css` design tokens + `css/webflow.css` legacy) |
| JS Runtime | Vanilla JS (`js/webflow.js` legacy + inline scripts) |
| Fonts | Google Fonts — Cormorant Garamond (headings), DM Sans (body) |
| Server | PHP-FPM + Apache (local via Nix flake, production via Hostinger) |
| i18n | PHP gettext (`php/i18n.php`) with `.po`/`.mo` locale files |
| Dev Environment | Nix flakes (`flake.nix`) providing PHP, Apache, Node.js |
| Dev Server | `serve` command (PHP-FPM + Apache on `localhost:8080`) |
| Hosting | Hostinger (Apache + PHP) |
| VCS | Git |

## Setup Commands

- Enter dev shell: `nix develop` (or use direnv with `.envrc`)
- Start local dev server: `serve` (runs PHP-FPM + Apache on http://localhost:8080)
- Stop dev server: `stop_serve`
- Alternative static server: `npx browser-sync start --server --files "*.html, *.php, css/*.css, js/*.js"`

## Project Structure

```
├── index.php               # Main landing page (PHP, uses gettext i18n)
├── 401.html / 404.html     # Error pages
├── TODO.md                 # Planned features / task list
├── AGENTS.md               # This file
│
├── php/                    # Shared PHP components
│   ├── i18n.php            # gettext internationalization setup
│   ├── navbar.php          # Shared navigation bar
│   └── footer.php          # Shared footer
│
├── locale/                 # gettext locale files
│   ├── es_ES/LC_MESSAGES/  # Spanish translations
│   ├── en_US/LC_MESSAGES/  # English translations
│   └── fr_FR/LC_MESSAGES/  # French translations (future)
│
├── pages/
│   ├── contact.php         # Contact page (hand-coded, PHP)
│   ├── contact.html        # Contact page (legacy Webflow, Spanish)
│   ├── experience.php      # Experience page (hand-coded, PHP)
│   ├── experience.html     # Experience page (legacy Webflow, English)
│   └── houses/             # Individual house detail pages
│       ├── casa-negra.html     # Spanish (Webflow-exported)
│       ├── black-house.html    # English (hand-coded)
│       ├── casa-azul.html      # etc.
│       ├── blue-house.html
│       └── ... (20 house files total)
│
├── css/
│   ├── main.css            # Shared design tokens + base styles (active)
│   ├── normalize.css       # CSS reset
│   ├── webflow.css         # Webflow framework styles (legacy)
│   └── santa-homes.webflow.css  # Webflow-exported project styles (legacy)
│
├── js/
│   ├── main.js             # Shared JS (placeholder)
│   ├── availability.js     # Calendar/list rendering (placeholder)
│   └── webflow.js          # Webflow JS runtime (~800KB, legacy)
│
├── data/
│   ├── houses.json         # House data (placeholder)
│   └── availability.json   # Availability dates (placeholder)
│
├── images/
│   ├── black-house/        # Photo gallery (WebP)
│   ├── brown-house/        # Photo gallery (WebP)
│   ├── green-house/        # Photo gallery (WebP)
│   ├── white-house/        # Photo gallery (WebP)
│   ├── SANTA-MONICA-FOTOS/ # Drone / area photos (WebP)
│   ├── branding/           # Logo wordmark (SVG, PNG, WebP)
│   └── *.{jpg,jpeg,png}   # Various loose images (non-WebP, excluded by .gitignore)
│
├── flake.nix               # Nix dev environment (PHP + Apache + Node.js)
├── flake.lock              # Nix flake lock file
├── .envrc                  # direnv config (loads nix develop)
├── .htaccess               # Apache config (minimal/empty)
├── .gitignore              # Ignores non-WebP images, .DS_Store, node_modules
├── package.json            # Dependencies (browser-sync)
└── package-lock.json
```

## Image Conventions

- **House gallery images must be in WebP format** — the `.gitignore` explicitly excludes JPG, PNG, GIF, SVG, and other formats.
- House photos are organized in subdirectories under `images/` (e.g., `images/black-house/`, `images/white-house/`).
- When adding new house images, place them in the corresponding `images/<house-name>/` directory.
- Image references in HTML use relative paths (e.g., `images/black-house/9A4A5962-HDR.webp`).
- **Note:** Many loose images in `images/` root are non-WebP (JPG/PNG) and are git-ignored. These are legacy assets from the Webflow export.

## Code Style Guidelines

### CSS Custom Properties (Design Tokens)

All pages share these design tokens (defined in `css/main.css` and `:root`):

```css
--sand: #E8DFD4;
--sand-light: #F4F0EB;
--sand-dark: #C4B8A9;
--charcoal: #1A1A1A;
--charcoal-soft: #2D2D2D;
--warm-white: #FDFBF8;
--olive: #5C6B4F;
--olive-light: #7A8C6A;
--terracotta: #B8704A;
--terracotta-light: #D4956E;
--gold: #C9A96E;
--gold-light: #DFC89A;
--text-primary: #1A1A1A;
--text-secondary: #6B6358;
--text-light: #9A9188;
--heading: 'Cormorant Garamond', Georgia, serif;
--body: 'DM Sans', -apple-system, sans-serif;
--nav-height: 80px;
```

Always use these variables instead of hardcoding colors or fonts.

### Page Architecture

**New PHP pages** (active development):
- Use `php/i18n.php` for internationalization via gettext
- Include shared components: `php/navbar.php`, `php/footer.php`
- Link to `css/main.css` for styles
- File extension: `.php`

**Legacy Webflow pages** (maintained, not actively developed):
- Use Webflow CSS classes and JS runtime
- Reference `css/normalize.css`, `css/webflow.css`, `css/santa-homes.webflow.css`
- Include inline `<style>` blocks to override Webflow styles with design tokens
- File extension: `.html`

### Naming Conventions

- House page files: `<color>-house.html` (English), `casa-<color>.html` (Spanish)
- CSS classes: kebab-case (e.g., `.nav-links`, `.house-gallery`)
- Bilingual content: handled via gettext `.po`/`.mo` files (not separate HTML files)

### HTML Structure

- PHP pages use `css/main.css` with inline `<style>` blocks for page-specific styles.
- Webflow pages reference `css/normalize.css`, `css/webflow.css`, and `css/santa-homes.webflow.css`.
- Navigation is handled by `php/navbar.php` (PHP pages) or Webflow navbar component (legacy pages).
- All pages include nav links to: Inicio, Experiencia/Experience, Contacto/Contact.

## Internationalization (i18n)

The site uses PHP gettext for translations:
- Language is detected from URL path prefix (`/es/`, `/en/`) or session
- Default language: Spanish (`es`)
- Translation files: `locale/{locale}/LC_MESSAGES/messages.{po,mo}`
- Source strings wrapped with `_("string")` in PHP templates
- To add a new language: create `locale/{lang}/LC_MESSAGES/messages.po` and compile to `.mo`

## Development Workflow

1. Enter the Nix dev shell: `nix develop` (or let direnv auto-load via `.envrc`)
2. Start the dev server: `serve` (PHP-FPM + Apache on http://localhost:8080)
3. Edit PHP/HTML/CSS files directly — there is no build step.
4. For static HTML-only changes, BrowserSync can be used as an alternative.
5. Preview changes in the browser; Apache serves PHP files with proper routing.
6. Commit changes with Git.

## Build and Deployment

- **No build step required** — the site is PHP + static HTML/CSS/JS.
- Files are deployed directly to Hostinger hosting (likely via FTP/SFTP or Git deploy).
- PHP files require a PHP-enabled server (Hostinger provides this).
- gettext `.mo` files must be compiled from `.po` files before deployment (use `msgfmt`).
- The Nix flake provides the full local dev stack (PHP-FPM + Apache).

## Testing

There are no automated tests. Manual testing checklist:
- Start local server with `serve` and open http://localhost:8080
- Verify PHP pages render correctly (index.php, contact.php, experience.php)
- Test language switching (if implemented in URLs)
- Verify responsive layout on mobile and desktop viewports.
- Test the contact form submission (requires PHP server).
- Check that all images load correctly (WebP format for house galleries).
- Verify navigation links work across all pages.

## Pull Request Guidelines

- Title format: `[component] Brief description` (e.g., `[house-pages] Add red house gallery`)
- Verify house gallery images are WebP before committing.
- Update gettext `.po` files when changing translatable strings.
- Test responsive layout before submitting.
- Do not commit `node_modules/` (already in `.gitignore`).

## Security Notes

- SMTP credentials should be stored in environment variables, not in source code.
- Do not commit API keys, passwords, or SMTP credentials to the repository.
- `.envrc` is git-ignored (may contain sensitive environment setup).

## Known Issues / TODO

See `TODO.md` for the current task list. Key planned features:
- Consistent design across all house pages
- Responsive display fixes (PC + mobile)
- Availability calendar
- Landing page with house photo gallery
- `/availability` page listing available houses and dates
- Image generator for sharing house info via WhatsApp/email
- Admin site
- Full i18n migration (replace duplicated HTML with gettext)
