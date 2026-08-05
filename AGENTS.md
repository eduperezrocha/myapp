# AGENTS.md

## Project Overview

SanTa Homes is a bilingual (Spanish/English) real estate website for a vacation rental / housing business in Aguascalientes, Mexico. The site showcases properties (houses) with photo galleries, availability info, and contact forms.

The site has two generations of code:
- **Webflow-exported pages** (legacy): `contact.html`, `experiencia.html`, `casa-*.html`, house detail pages like `white-house.html`, etc. These use Webflow's CSS (`css/webflow.css`, `css/santa-homes.webflow.css`) and JS runtime (`js/webflow.js`).
- **Hand-coded pages** (newer): `index.html`, `home.html`, and some house detail pages. These use inline `<style>` blocks, CSS custom properties, and Google Fonts (Cormorant Garamond + DM Sans).

The only server-side component is `formscript.php`, a PHP contact form handler using PHPMailer via Hostinger SMTP.

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Markup | HTML5 (static files) |
| Styling | CSS3 (Webflow-exported + custom inline styles) |
| JS Runtime | Vanilla JS (`js/webflow.js` + inline scripts) |
| Fonts | Google Fonts — Cormorant Garamond (headings), DM Sans (body) |
| Contact Form | PHP + PHPMailer (`formscript.php`) |
| Dev Server | BrowserSync (via `package.json`) |
| Hosting | Hostinger (Apache + PHP) |
| VCS | Git |

## Setup Commands

- Install dependencies: `npm install`
- Start local dev server with live reload: `npx browser-sync start --server --files "*.html, css/*.css, js/*.js"`
- Or use the BrowserSync API programmatically if a config file is added later.

## Project Structure

```
├── index.html              # Main landing page (hand-coded, Spanish)
├── home.html               # English version of landing page (hand-coded)
├── contact.html            # Contact page (Webflow-exported, Spanish)
├── contact-us.html         # Contact page (Webflow-exported, English)
├── experiencia.html        # Experience page (Webflow-exported, Spanish)
├── experience.html         # Experience page (Webflow-exported, English)
├── formscript.php          # PHP contact form handler (PHPMailer → Hostinger SMTP)
├── 401.html / 404.html     # Error pages
├── TODO.md                 # Planned features / task list
│
├── pages/
│   ├── contact.html        # Contact page (Webflow-exported, Spanish)
│   ├── contact-us.html     # Contact page (Webflow-exported, English)
│   ├── experiencia.html    # Experience page (Webflow-exported, Spanish)
│   ├── experience.html     # Experience page (Webflow-exported, English)
│   ├── detail_work.html    # Work detail page (Webflow-exported)
│   └── houses/             # Individual house detail pages
│       ├── black-house.html
│       ├── blue-house.html
│       ├── brown-house.html
│       ├── green-house.html
│       ├── white-house.html
│       ├── casa-*.html     # Spanish versions
│       └── ...
│
├── css/
│   ├── main.css            # Shared design tokens + base styles (TODO)
│   ├── normalize.css       # CSS reset
│   ├── webflow.css         # Webflow framework styles
│   └── santa-homes.webflow.css  # Webflow-exported project styles
│
├── js/
│   ├── main.js             # Shared JS: nav, animations (TODO)
│   ├── availability.js     # Calendar/list rendering (TODO)
│   └── webflow.js          # Webflow JS runtime (~800KB)
│
├── data/
│   ├── houses.json         # Single source of truth for all house info (TODO)
│   └── availability.json   # Availability dates per house (TODO)
│
├── images/
│   ├── black-house/        # Photo gallery (WebP)
│   ├── brown-house/        # Photo gallery (WebP)
│   ├── green-house/        # Photo gallery (WebP)
│   ├── white-house/        # Photo gallery (WebP)
│   └── SANTA-MONICA-FOTOS/ # Drone / area photos (WebP)
│
├── .htaccess               # Apache config (minimal)
├── .gitignore              # Ignores non-WebP images, .DS_Store, node_modules
├── package.json            # Dependencies (browser-sync)
└── package-lock.json
```

## Image Conventions

- **All images must be in WebP format** — the `.gitignore` explicitly excludes JPG, PNG, GIF, SVG, and other formats.
- House photos are organized in subdirectories under `images/` (e.g., `images/black-house/`, `images/white-house/`).
- When adding new house images, place them in the corresponding `images/<house-name>/` directory.
- Image references in HTML use relative paths (e.g., `images/black-house/9A4A5962-HDR.webp`).

## Code Style Guidelines

### CSS Custom Properties (Design Tokens)

Both hand-coded and newer Webflow pages share these design tokens (defined in `:root`):

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

### Naming Conventions

- House page files: `<color>-house.html` (English), `casa-<color>.html` (Spanish)
- CSS classes: kebab-case (e.g., `.nav-links`, `.house-gallery`)
- Bilingual pages: separate HTML files for Spanish and English (not inline translation)

### HTML Structure

- Hand-coded pages use inline `<style>` blocks (no external stylesheet for new pages).
- Webflow-exported pages reference `css/normalize.css`, `css/webflow.css`, and `css/santa-homes.webflow.css`.
- Navigation links must point to both language versions (ES/EN toggle in the nav bar).
- All pages include the same nav structure with links to: Inicio/Home, Experiencia/Experience, Contacto/Contact.

## Bilingual Content

The site supports Spanish (default) and English:
- Spanish pages: `index.html`, `contact.html`, `experiencia.html`, `casa-*.html`
- English pages: `home.html`, `contact-us.html`, `experience.html`, `*-house.html`
- When adding or modifying content, always update both language versions.
- The nav bar includes language toggle links (ES ↔ EN).

## Development Workflow

1. Run `npm install` to install BrowserSync.
2. Start the dev server with BrowserSync for live reload.
3. Edit HTML files directly — there is no build step or compilation.
4. Preview changes in the browser; BrowserSync auto-reloads on file changes.
5. Commit changes with Git.

## Build and Deployment

- **No build step required** — the site is pure static HTML/CSS/JS.
- Files are deployed directly to Hostinger hosting (likely via FTP/SFTP or Git deploy).
- PHP files require a PHP-enabled server (Hostinger provides this).
- The contact form (`formscript.php`) depends on `vendor/autoload.php` (Composer + PHPMailer), which must be present on the server.

## Testing

There are no automated tests. Manual testing checklist:
- Open each HTML file locally in a browser.
- Verify responsive layout on mobile and desktop viewports.
- Test the contact form submission (requires PHP server).
- Check that all images load correctly (WebP format).
- Verify navigation links work across all pages and both languages.

## Pull Request Guidelines

- Title format: `[component] Brief description` (e.g., `[house-pages] Add red house gallery`)
- Verify all images are WebP before committing.
- Update both Spanish and English versions when changing content.
- Test responsive layout before submitting.
- Do not commit `node_modules/` (already in `.gitignore`).

## Security Notes

- `formscript.php` contains SMTP credentials in plaintext — **rotate these credentials** and consider moving them to environment variables or a separate config file outside the web root.
- Do not commit API keys, passwords, or SMTP credentials to the repository.

## Known Issues / TODO

See `TODO.md` for the current task list. Key planned features:
- Consistent design across all house pages
- Responsive display fixes (PC + mobile)
- Availability calendar
- Landing page with house photo gallery
- `/availability` page listing available houses and dates
- Image generator for sharing house info via WhatsApp/email
