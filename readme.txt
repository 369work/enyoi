=== Enyoi Theme ===

Theme Name: Enyoi
Contributors: 369work
Author URI: https://profiles.wordpress.org/369work/
Tags: blog, portfolio, one-column, block-patterns, block-styles, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, style-variations, threaded-comments, translation-ready, wide-blocks
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 2.0
License: GNU General Public License v3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Enyoi is a refined block theme for full site editing. An ivory ground, gold accents and a serif display face give salons, clinics and small business sites an unhurried, editorial feel. It ships with a full-bleed hero, menu, staff, news and reservation patterns, plus Monochrome and Classic Rose style variations.

== Copyright ==

Enyoi WordPress Theme, (C) 2025 369work.
Enyoi is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see https://www.gnu.org/licenses/gpl-3.0.html.

== Description ==

Enyoi is a block theme built for the WordPress Site Editor. Every template, header and footer is editable in the browser with no page builder and no custom options panel to learn.

It keeps a calm, warm palette and plenty of whitespace, so text stays readable and images carry the page. The bundled patterns cover a hero, services, staff and contact section, which makes it quick to assemble a blog, a portfolio, a salon site or a small business site.

Key Features:
* Full site editing with block templates and template parts
* Block patterns for hero, services, staff and contact sections
* Custom color palette and font sizes via theme.json
* Custom logo and navigation
* Featured images
* Threaded comments
* Wide and full width blocks
* Translation ready
* No jQuery, no external font or script requests

== Installation ==
1. Go to "Appearance" → "Themes" in the admin panel
2. Click "Add New"
3. Enter "Enyoi" in the search form
4. Install
5. Click Activate
6. Navigate to Appearance > Editor to start customizing

== Frequently Asked Questions ==

= Does this theme support custom menus? =
Yes, the theme supports WordPress custom menus.

= Is this theme responsive? =
Yes, Enyoi is fully responsive and mobile-friendly.


== Resources ==

* All images used in this theme are created by 369work and licensed under CC0 (https://creativecommons.org/publicdomain/zero/1.0/)
* Screenshot : Copyright 369work. licensed under CC0 (https://creativecommons.org/publicdomain/zero/1.0/)
* Background Image(hero-background.webp) : Copyright 369work. licensed under CC0 (https://creativecommons.org/publicdomain/zero/1.0/)
* Background Image(hero-background-v2.webp) : Copyright 369work. licensed under CC0 (https://creativecommons.org/publicdomain/zero/1.0/)
* Icon(user.webp) : Copyright 369work. licensed under CC0 (https://creativecommons.org/publicdomain/zero/1.0/)


== Supports ==

* https://369theme.com/theme-enyoi.html
* You can view documentation and get support on the above site.


== Changelog ==

= 2.0 =
* Redesigned the front page: ivory and gold palette, serif display headings, full-bleed hero
* Added v2 patterns (header, hero, salon, menu, staff, blog, access, contact, footer). The 1.x patterns are kept and can still be inserted
* Added an Access section. When the Enyoi Store Info plugin is active it renders the store details through the plugin, otherwise the theme shows its own default layout
* Added Monochrome and Classic Rose style variations. Classic Rose reproduces the 1.x palette
* theme.json: Remapped the palette to the new colors, added hairline colors and derived color tokens under settings.custom
* Added assets/css/custom-v2.css for the v2 patterns. custom.css is untouched so existing pages keep their styling
* Added assets/css/editor-v2.css for editor-only adjustments, loaded after custom-v2.css
* style.css: Moved the header and footer decoration from the element selectors to the .header / .footer pattern classes
* style.css: Split the html and body rules. Setting height 100% together with overflow-x hidden on body turned body into a scroll container, which stopped window.scrollY and scroll driven styling
* theme.json: Replaced font size references whose slug contains a digit with literal values, because the var:preset notation does not kebab-case them
* Fixed the heading scale so h3 to h6 keep their 1.x sizes

= 1.9 =
* Compatible with WordPress 7.1
* theme.json: Translated color, gradient, font family and template part names to English
* languages: Added Japanese translations for the theme.json strings
* style.css / readme.txt: Updated theme tags and description
* Patterns and templates: Translated editor-facing block names to English

= 1.8 =
* Theme.json bug fixed

= 1.7 =
* Theme.json changed

= 1.6 =
* Compatible with WordPress 7.0
* Design changed
* Screenshot changed

= 1.5 =
* Security: Fixed escaping in pattern files
* theme.json: Added text-light and primary-light colors, fixed
* functions.php: Replaced @ob_end_flush() with ob_get_level() check, fixed
* style.css: Removed font-family declarations　consolidated duplicate body styles
* blog-post.php: Removed duplicate tagName attribute
* Templates added

= 1.4 =
* Compatible with WordPress 6.9
* Search page Bug fixed

= 1.3 =
* archive.html style Added

= 1.2 =
* Added shortcode for plugin to footer

= 1.1 =
* Bug fixed
* Remove functions
* license fixed

= 1.0.0 =
* Initial release








