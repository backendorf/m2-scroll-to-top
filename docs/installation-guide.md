# Installation Guide — Backentec Scroll To Top

## Requirements

| Requirement | Version |
|---|---|
| PHP | 8.1 or higher |
| Magento 2 / Adobe Commerce | 2.4.4 or higher |
| Hyvä Theme *(optional)* | 1.3 or higher |

---

## 1. Install via Composer

```bash
composer require backentec/m2-scroll-to-top
```

---

## 2. Enable the Module

```bash
bin/magento module:enable Backentec_ScrollToTop
bin/magento setup:upgrade
bin/magento cache:flush
```

Verify the module is active:

```bash
bin/magento module:status Backentec_ScrollToTop
```

Expected output: `Module is enabled`

---

## 3. Deploy Static Content *(production mode only)*

```bash
bin/magento setup:static-content:deploy
```

---

## 4. Hyvä Theme — Additional Steps

If your store uses the Hyvä Theme, two extra steps are required so Tailwind compiles the button styles.

### 4.1 Register the module for Tailwind compilation

```bash
bin/magento hyva:config:generate
```

This triggers the module observer, which adds the module path to `app/etc/hyva-themes.json`.

### 4.2 Rebuild the Tailwind CSS bundle

Navigate to your active Hyvä theme directory and run the production build:

```bash
# Example path — adjust to your theme location
cd app/design/frontend/Hyva/default

npm run build-prod
```

> Without this step the button will render without styles on Hyvä storefronts.

---

## 5. Verify the Installation

1. Open any storefront page.
2. Scroll down past the fold.
3. The Scroll to Top button should appear in the configured position.

If the button does not appear, check:

- Module is enabled: `bin/magento module:status Backentec_ScrollToTop`
- Configuration is set to **Enabled = Yes**: `Stores > Configuration > Backentec > Scroll To Top`
- Cache is clean: `bin/magento cache:flush`
- *(Hyvä only)* Tailwind build was executed after `hyva:config:generate`

---

## Uninstall

```bash
bin/magento module:disable Backentec_ScrollToTop
composer remove backentec/m2-scroll-to-top
bin/magento setup:upgrade
bin/magento cache:flush
```
