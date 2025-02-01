### Back to Top Arrow (Global) 

**Contributors**: Sanket Thakkar
**Tags**: back to top, scroll to top, arrow, navigation
**Requires at least**: 5.0
**Tested up to**: 6.7
**Stable tag**: 1.0.0
**License**: GPLv2 or later
**License URI**: https://www.gnu.org/licenses/gpl-2.0.html

---

### Description

The **Back to Top Arrow (Global)** plugin adds a customizable "Back to Top" arrow to your WordPress site. The arrow appears when users scroll down the page, allowing them to quickly return to the top of the page with a single click. The plugin includes settings to customize the arrow's position, background color, and text color.

---

### Features

- Adds a "Back to Top" arrow to your site.
- Customizable arrow position (left or right).
- Customizable background and text colors.
- Lightweight and easy to use.
- Fully compatible with WordPress coding standards.

---

### Installation

1. Download the plugin and upload it to your `/wp-content/plugins/` directory, or install it through the WordPress plugins directory.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. Go to **Settings > Back to Top** to configure the arrow's appearance.

---

### How It Works

1. **Arrow Rendering:**
   - The plugin adds a "Back to Top" arrow to the footer of your site.
   - The arrow becomes visible when users scroll down the page.

2. **Customization:**
   - You can customize the arrow's position, background color, and text color from the plugin settings page.

3. **Smooth Scroll:**
   - When users click the arrow, the page smoothly scrolls back to the top.

---

### Hooks & Filters

The plugin uses the following hooks and filters:

- `admin_menu`: Adds the settings page under the WordPress admin menu.
- `admin_init`: Registers plugin settings and fields.
- `wp_enqueue_scripts`: Enqueues CSS and JavaScript files for the frontend.
- `wp_footer`: Renders the "Back to Top" arrow in the footer.

---

### Uninstallation

When uninstalled, the plugin performs the following cleanup tasks:

- Removes the `back_to_top_settings` option from the WordPress database.
- Ensures no leftover data or settings remain.

---

### Code Standards

The plugin follows WordPress Coding Standards:

- Functions are prefixed to avoid name conflicts.
- Proper escaping and sanitization are used to prevent security vulnerabilities.
- The plugin is translation-ready with a text domain (`back-to-top-vip`) for localization.

---

### Contributing

If you find a bug or have an idea for improving the plugin, feel free to submit a pull request or open an issue on the plugin's GitHub repository.

---

### License

This plugin is licensed under the GPLv2 or later. You are free to modify and distribute it under the same terms.

---

### Contact

For support or inquiries, contact on Github Repo.

---

### Example Usage

After installation and activation, the "Back to Top" arrow will automatically appear on your site. You can customize its appearance by navigating to **Settings > Back to Top**.

---

### Screenshots

1. Back to Top arrow in action.
2. Plugin settings page with customization options.

---

### Changelog

= 1.0.0 =
* Initial release.

---

### Upgrade Notice

= 1.0.0 =
Initial release of the Back to Top Arrow (Global) plugin.
