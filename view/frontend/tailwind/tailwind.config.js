// Tailwind config extension for Backentec_ScrollToTop
// Merged by @hyva-themes/hyva-modules during theme compilation.
// NOTE: paths in `content` are resolved relative to the Magento root (BP),
// matching the `src` entry registered in hyva-themes.json by the observer.

module.exports = {
    content: [
        // The hyva-modules compiler resolves these relative to the module src path
        // registered in hyva-themes.json — works for both app/code and vendor installs
        'view/frontend/templates/**/*.phtml',
    ],
    safelist: [
        // Position and style classes are built dynamically in PHP, so they
        // won't be found by static scanning — safelist guarantees they compile
        'left-8',
        'right-8',
        'rounded-full',
        'rounded',
        'translate-y-4',
        'translate-y-0',
    ],
};
