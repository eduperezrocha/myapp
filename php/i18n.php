<?php
/**
 * Internationalization setup using gettext.
 *
 * Detects the preferred language from the URL path prefix (/es/, /en/),
 * falls back to the session value, then to 'es' (Spanish).
 *
 * Requires:
 * - locale/{lang}/LC_MESSAGES/messages.mo compiled gettext files
 * - Apache mod_rewrite with .htaccess rules for clean URLs
 *
 * Sets:
 * - $lang (string) Current language code ('es' or 'en')
 * - gettext domain 'messages' bound to ../locale/
 *
 * @package SanTaHomes\I18n
 */

session_start();

// Detect language from URL path prefix
$path = trim($_SERVER['REQUEST_URI'], '/');
$segments = explode('/', $path);
$lang = $segments[0];

// Validate, fallback to session, then default
if (!in_array($lang, ['es', 'en'])) {
    $lang = $_SESSION['lang'] ?? 'es';
}
$_SESSION['lang'] = $lang;

// Map short codes to full locale names
$localeMap = [
    'es' => 'es_ES.utf8',
    'en' => 'en_US.utf8',
];
$locale = $localeMap[$lang] ?? $localeMap['es'];

// Initialize gettext
setlocale(LC_ALL, '');  // Reset locale first
setlocale(LC_ALL, $locale);
bindtextdomain('messages', __DIR__ . '/../locale');
textdomain('messages');
