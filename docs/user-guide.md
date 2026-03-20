# User Guide — Backentec Scroll To Top

## Overview

Backentec Scroll To Top adds a lightweight, configurable button to your storefront that lets customers return to the top of the page with a single click. The button appears automatically after the user scrolls down and disappears when they reach the top.

---

## Accessing the Configuration

1. Log in to the Magento / Adobe Commerce Admin panel.
2. Navigate to **Stores > Configuration**.
3. In the left panel, find the **Backentec** tab and click **Scroll To Top**.

---

## Configuration Options

### General

| Field | Description | Options | Default |
|---|---|---|---|
| Enabled | Show or hide the button on the storefront | Yes / No | Yes |
| Position | Horizontal position of the button | Left / Right | Right |
| Style | Shape of the button | Round / Square | Round |

> All options support **Default / Website / Store View** scope. You can configure different settings per store view.

---

## Changing the Scope

To configure the module for a specific website or store view:

1. In the top-left scope selector, choose the desired **Website** or **Store View**.
2. Uncheck **Use Default** next to the field you want to override.
3. Set the desired value and click **Save Config**.
4. Flush the cache: **System > Cache Management > Flush Magento Cache**.

---

## Button Behavior

- The button is hidden on page load.
- It appears after the user scrolls **more than 100px** from the top.
- Clicking the button smoothly scrolls the page back to the top.
- On **Luma / Blank** themes: uses jQuery animate.
- On **Hyvä** themes: uses native `window.scrollTo` with `behavior: smooth` via Alpine.js.

---

## Disabling the Button

Set **Enabled** to **No** and save. No cache flush is required — the block is conditionally rendered via `ifconfig` in the layout, so Magento handles it automatically.

---

## Troubleshooting

**Button not showing after enabling**
- Flush the cache: `bin/magento cache:flush`
- In production mode, redeploy static content: `bin/magento setup:static-content:deploy`

**Button shows but has no styles on Hyvä**
- Run `bin/magento hyva:config:generate` then rebuild the Tailwind bundle (`npm run build-prod`) inside your Hyvä theme directory.

**Position or style not changing**
- Make sure you saved the config at the correct scope and flushed the cache.
