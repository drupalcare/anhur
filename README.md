# Anhur

Anhur is a sub-theme of W3CSS Theme (machine name `drupal8_w3css_theme`). On wide
screens it keeps the main menu visible in a fixed column at the left of the page.
On narrow screens the menu is hidden and a button in the header opens it.

## Requirements

- Drupal 11.3 or later, or Drupal 12.
- W3CSS Theme 3.0. Install it first. Anhur does not work without it, and it is
  the release that Anhur's class names and settings follow.

## Installing

1. Install W3CSS Theme 3.0 (for example `composer require drupal/d8w3css`).
2. Install Anhur into `themes/contrib`, for example
   `composer require drupal/anhur`.
3. Go to Appearance (`/admin/appearance`) and scroll to "Anhur".
4. Click "Install and set as default".

With Drush: `drush theme:enable drupal8_w3css_theme anhur`, then
`drush config:set system.theme default anhur -y`, then `drush cr`.

Installing the theme also adds its default block placements (main menu, account
menu, search, branding, footer menu and the page blocks). Check them at
`/admin/structure/block` for the Anhur theme and move any that clash with blocks
you already have.

## What is different from W3CSS Theme

Anhur changes the page layout, the header and the menu. The content regions
come from the base theme.

- **Fixed menu column on wide screens.** The main menu and the account menu are
  placed in the "Primary Menu Vertical" region. From 993 pixels wide and up, they
  show in a column 250 pixels wide at the left, and the page content sits to the
  right of it. The menu open and close buttons are hidden, because the menu is
  always visible. The whole layout is at most 1600 pixels wide.
- **Hidden menu on narrow screens.** Below 993 pixels, the column is hidden. A
  menu button at the left of the header opens it as a side panel. The header
  sticks to the top of the window.
- **Header with three parts.** The menu button is at the left, the Site branding
  block in "Header" is centered, and the search button is at the right.
- **Search panel.** The Search block goes in the "Fixed Search Bar" region. It
  does not show on the page. The search button opens it as a full-width panel at
  the top of the window. A close button, the Escape key, or a click outside the
  panel closes it. Opening the search closes the side menu.
- **Horizontal menu is still available.** A menu block you place in "Primary
  Menu" shows as the base theme's horizontal bar below the header. Anhur places
  none there by default.
- **Footer order.** On the front page, the three footer regions show first. On
  every page, the bottom regions, the footer menu and the copyright follow, in
  one footer.
- **Colors.** The default color scheme is `w3-theme-00014` (SlateGray). Anhur
  adds a few contrast fixes for this scheme: one heading color in the page
  regions, a darker input focus border and footer text that takes the footer
  color. They apply only while this scheme is selected. If you pick another
  scheme, you get that scheme's own colors.
- **Focus.** Links, buttons and fields show a visible outline on keyboard focus.

The regions are the base theme's 22, plus "Fixed Search Bar" (23 in total).

## Settings

Anhur has no settings of its own. It uses the settings form of W3CSS Theme: go
to `/admin/appearance/settings/anhur` to set the website width, color scheme and
region colors, fonts, social links, copyright and the rest. Anhur's own defaults
are the color scheme above and the copyright text "Copyright %year% - All Rights
Reserved". Social links are empty and turned off, and the credit link is off.

The fixed column takes 250 pixels from the page width. Long menu labels, deep
menus and a narrow website width setting leave less room for content.

## Checking that it works

1. Open the front page in a window wider than 993 pixels. The main menu shows in
   a column at the left, and the page content is to its right. There is no menu
   open button.
2. Click the search button in the header. The search panel slides down from the
   top and the cursor is in the search field. Press Escape. The panel closes.
3. Make the window narrower than 993 pixels, or use a phone. The column is
   gone and a menu button shows at the left of the header.
4. Click the menu button. The menu opens as a panel. Close it with its close
   button.
5. Scroll down on the narrow window. The header stays at the top.
6. Press the Tab key. A visible outline moves with the focus.

## Custom CSS and JavaScript

Anhur 3.0 uses the `w3css-` class names and ids of W3CSS Theme 3.0, for example
`w3css-main-nav-vertical` and `w3css-page-wrapper`. W3.CSS library classes that
start with `w3-` are unchanged. Custom CSS or JavaScript written against the old
names must be renamed. The base theme ships a script for it and a table of old
and new names: `docs/CLASS-MIGRATION.md` in the W3CSS Theme folder.

Put your own CSS, JavaScript and templates in a sub-theme of Anhur. The folder
`anhur_subtheme` in this package is an empty starter. Copy it to `themes/custom`,
and rename the folder, its files, the library name inside them and the name in
the `.info.yml` file before you enable it.

## Helpful links

- W3CSS Theme: https://www.drupal.org/project/d8w3css
- Documentation: https://www.drupal.org/node/2866181
- Color schemes: https://www.w3css.flashwebcenter.com/w3css-predefined-color-themes
- Anhur demo: https://www.anhur.flashwebcenter.com/
- Issue queue: https://www.drupal.org/project/issues/anhur
