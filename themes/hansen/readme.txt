=== Hansen ===
Contributors: uxl
Tested up to: 5.9
Requires at least: 5.9
Requires PHP: 5.6
Version: 1.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A block template theme for full site editing, with various block styles and patterns.

== Description ==

A block template theme for full site editing, with various block styles and patterns.

Please note the Search template has a temporary hardcoded title until the Query Title block supports the search title.

== Changelog ==

1.5.1 - February 2022
Fix settings.spacing.units error in theme.json
Fix spacer blocks height value typo

1.5 - February 2022
Tested up to 5.9
Requires 5.9
Updated theme.json to version 2
Renamed /block-templates/ directory to /templates/
Renamed /block-template-parts/ directory to /parts/
Updated single-product.html template use WC legacy template
Removed Gutenberg prompt from index.php

1.4.6 - December 2021
Removed WooCommerce single product shortcode
Reconfigured single-product.html template to use post-content block instead of shortcode

1.4.5 - July 2021
Removed Require Gutenberg
Added an Appearance sub-menu link to Additional CSS
Added page-cover-title.html template
Fix CSS for sticky header template part in template editor
Try using new "not stack on mobile" option in header columns

1.4.4 - June 2021
Removed theme skip link in favor of Gutenberg skip link functionality
Templates: changed all instances of site-content element from div to main
Templates: changed all instances of wp:query-loop to the new wp:post-template format

1.4.3 - May 2021
Removed full-width alignment javascript in favor of CSS tweaks
Removed Query Loop block styles
Added previous Query Loop styles to parent Query block wrapper
Removed mobile Navigation block styles in favor of core Navigation responsive option
Added Heading, Paragraph, Site Title, Site Tagline, Post Title, Query Title block styles: No Margin
Added Group block styles: Toggle to Open
Reconfigured previous Group block styles: Hide on Mobile, Show Only on Mobile, Toggle to Open on Mobile

1.4.2 - May 2021
Fix missing style attribute in full-width alignment

1.4.1 - May 2021
Fix for Gutenberg layout now adding unwanted !important CSS rules
Removed theme submenu-icon styling as no longer needed
Added Group block styles: Hide on Mobile, Show Only on Mobile, Toggle to Open on Mobile

1.4 - May 2021
Requires at least Gutenberg 10.6.0
Updated theme.json to new shape
Moved some styling from style.css to theme.json
Removed "text" color from palette to prevent conflicts with .has-text-color
Replaced post-hierarchical-terms and post-tags blocks with new post-terms block
Added new div wrapper to query blocks
Added Roboto, Roboto Slab, Merriweather fonts
Added "Cover with Offset Box" block pattern

1.3.1 - April 2021
Removed not-found-404.jpg image, was added in error

1.3 - April 2021
Updated minimum WordPress version to 5.6
Updated theme.json for new alignments
Re-configured templates for new alignments
Removed "theme":"hansen" from template-part in single-product.html
Removed spacer blocks from templates and instead use spacing->padding controls
Removed home.html template
Removed front-page.html template
Added page-no-title.html template
Added page-blank-canvas.html template
Added Query Title to archive and author templates
Added Term Description to archive template
Changed default color of Site Title from text-color to link-color
Changed wide width to 1440px
Changed header and footer inner group to wide width

1.2 - March 2021
Removed single-post.html template
Re-configured single.html template
Added attachment.html template
Re-added "theme":"hansen" to template-part in single-product.html
Added With Icon styles for post author, date, categories and tags blocks
Added Button and Arrow styles for post excerpt read more block
Updated CSS for Page List in Navigation block

1.1.8 - March 2021
Updated screenshot to remove reference to full site editing features
Replaced spacer blocks in single post template with group block with padding
Minor CSS updates

1.1.7 - March 2021
Added custom padding support (group and cover blocks)
Added new Query Loop block styles
Removed No Bottom Margin columns block style
Added No Spacing columns block style
Added No Spacing gallery block style
Added Text Columns group block style
Added Overlap and Angled media/text block styles

1.1.6 - February 2021
Added categories and tags to single-post template
Added box-shadow style to query-loop in search template
Updates resources/credits copyrights

1.1.5 - February 2021
Removed fontWeights, fontStyles, textTransforms, and textDecorations defaults from theme.json
Added templateParts in theme.json to assign template parts to areas

1.1.4 - February 2021
Removed temporary theme check files
Removed singular template
Removed hardcoded navigation links in header, now defaults to empty menu
Removed enqueued comments script
Added comments and comments form blocks to page template
Added query pagination block to relevant templates
Added sticky header template part

1.1.3 - February 2021
Removed background color from templates, instead inherit root background color
Removed bundled fonts
Added WPTT/webfont-loader
Added styling to change appearance of navigation submenu icon
Added jquery script to improve alignment of nested full-width blocks

1.1.2 - February 2021
Update theme.json structure for Gutenberg 9.9
Added load_theme_textdomain for translations
Removed editor fixes for cover background colors
Removed enqueued block styles, not needed now core block styles loaded in head (was footer)

1.1.1 - January 2021
Reconfigured skip link to make text string translatable
Added author template
Added comments block to single posts
Added form styling

1.1 - January 2021
Removed gutenberg-experiments/gutenberg-full-site-editing option check from Require Gutenberg
Added skip link
Added Mobile styles for Navigation Block
Changes to alignments for better consistency across site editing / post editing / front end

1.0 - January 2021
Initial release

== Copyright ==

Hansen WordPress Theme, Copyright 2021 UXL Themes
Hansen is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Credits and Resources ==

Empty Theme - (C) the WordPress team - WordPress.org
https://github.com/WordPress/theme-experiments/tree/master/emptytheme
License: GNU General Public License v2.0 or later - https://www.gnu.org/licenses/gpl-2.0.html

Webfonts Loader - (C) WordPress Themes Team
https://github.com/WPTT/webfont-loader
License: MIT - https://opensource.org/licenses/MIT

Image used in screenshot and included in block pattern:
https://stocksnap.io/photo/house-interior-WDVIQZEXML
(C) Nathan Fertig - https://stocksnap.io/author/1532
License: CC0 Creative Commons - https://creativecommons.org/publicdomain/zero/1.0/

https://stocksnap.io/photo/business-man-YA8MFMHUYG
(C) Direct Media  - https://stocksnap.io/author/directmedia
License: CC0 Creative Commons - https://creativecommons.org/publicdomain/zero/1.0/