# Backentec Scroll To Top for Adobe Commerce / Magento 2

A lightweight and configurable module that adds a "Scroll to Top" button to your storefront.

## Features

- Enable/disable via admin configuration
- Configurable position: Left or Right
- Configurable style: Round or Square
- Smooth scroll animation
- Accessible (ARIA labels)
- Scope-aware configuration (Default / Website / Store View)

## Requirements

- PHP 8.1+
- Magento 2.4.x / Adobe Commerce 2.4.x
- Hyvä Theme (optional) — automatically detected, no extra configuration needed

## Hyvä Theme Compatibility

When the Hyvä Theme is active, the module automatically serves an Alpine.js + Tailwind CSS template instead of the default jQuery/Less one.

No additional compatibility module is required. After installing, run:

```bash
bin/magento setup:upgrade
bin/magento hyva:config:generate
# inside your Hyvä theme directory (e.g. app/design/frontend/Hyva/default):
npm run build-prod
```

The `hyva:config:generate` command triggers the observer that registers this module in `app/etc/hyva-themes.json`. The subsequent `npm run build-prod` is when Tailwind actually scans the module templates and compiles the utility classes into the theme CSS. Without this step, the button will have no styles.

## Installation

```bash
composer require backentec/m2-scroll-to-top
bin/magento module:enable Backentec_ScrollToTop
bin/magento setup:upgrade
bin/magento cache:flush
```

## Configuration

Admin panel: `Stores > Configuration > Backentec > Scroll To Top`

| Option   | Description                        | Default |
|----------|------------------------------------|---------|
| Enabled  | Show or hide the button            | Yes     |
| Position | Horizontal position (Left / Right) | Right   |
| Style    | Button shape (Round / Square)      | Round   |

## License

[MIT](https://opensource.org/licenses/MIT)
