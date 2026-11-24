# Anhur changelog

## Next release

- Header buttons: the menu and search icons keep the header's colour on hover (W3.CSS turned them black, which hid them on a dark header); the hover shows as a light tint.
- Search panel: the close button is now 44px high, the same height as the search field and the Search button (the base theme fixes those at 44px).
- Composer: the package name is `drupal/anhur-anhur` again, the name Drupal.org publishes; the rename to `drupal/anhur` is reverted, so `composer require drupal/anhur-anhur` keeps working.
- Accessibility: the search slide wrapper no longer adds a second search landmark around the search form.
- JavaScript: the search behavior is renamed `anhurSearchSlide`; the 2.x name `anhurThemeBehavior` keeps working as a deprecated alias, so a sub-theme that replaces or reads it is unaffected.
- CSS layers: the stylesheet is written in W3CSS Theme 3.x layers (`w3css.subtheme`, tokens, base, locked), with css-layers.json and scripts/css-layers-check.py; the library uses `drupal8_w3css_theme/base-layers` instead of the deprecated `d8w3css-global-styling`.
- W3CSS Theme 3.x fixes: the side menu's open and close buttons are hidden again from 992px (the rule now also sits in `w3css.subtheme`; its copy in `w3css.locked`, where a normal declaration is the weakest, lost to the base); the footer search form border for the Harbor Blue scheme is set on `#w3css-footer-menu-inner form.w3-content` instead of the removed `--w-fm-inner-f-v` token; the starter sub-theme's stylesheet uses the `w3css.custom` layer.
