# Anhur changelog

## Next release

- Accessibility: the search slide wrapper no longer adds a second search landmark around the search form.
- JavaScript: the search behavior is renamed `anhurSearchSlide`; the 2.x name `anhurThemeBehavior` keeps working as a deprecated alias, so a sub-theme that replaces or reads it is unaffected.
- CSS layers: the stylesheet is written in W3CSS Theme 3.x layers (`w3css.subtheme`, tokens, base, locked), with css-layers.json and scripts/css-layers-check.py; the library uses `drupal8_w3css_theme/base-layers` instead of the deprecated `d8w3css-global-styling`.
- W3CSS Theme 3.x fixes: the side menu's open and close buttons are hidden again from 992px (the rule now also sits in `w3css.subtheme`; its copy in `w3css.locked`, where a normal declaration is the weakest, lost to the base); the footer search form border for the Harbor Blue scheme is set on `#w3css-footer-menu-inner form.w3-content` instead of the removed `--w-fm-inner-f-v` token; the starter sub-theme's stylesheet uses the `w3css.custom` layer.
