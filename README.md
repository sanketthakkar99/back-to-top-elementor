=== Back to Top Arrow (Global) ===
Contributors: Sanket Thakkar
Tags: back to top, scroll to top, arrow, navigation
Requires at least: 5.0
Tested up to: 6.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds a global "Back to Top" arrow to your WordPress site with customizable settings.

== Description ==

The **Back to Top Arrow (Global)** plugin adds a customizable "Back to Top" arrow to your WordPress site. The arrow appears when users scroll down the page, allowing them to quickly return to the top of the page with a single click. The plugin includes settings to customize the arrow's position, background color, and text color.

== Features ==

- Adds a "Back to Top" arrow to your site.
- Customizable arrow position (left or right).
- Customizable background and text colors.
- Lightweight and easy to use.
- Fully compatible with WordPress coding standards.

== Installation ==

1. Upload the `back-to-top-global` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the **Plugins** menu in WordPress.
3. Go to **Settings > Back to Top** to configure the arrow's appearance.

== Frequently Asked Questions ==

= How do I change the arrow's position? =
Go to **Settings > Back to Top** and select the desired position (left or right) from the dropdown menu.

= Can I change the arrow's colors? =
Yes, you can customize the background and text colors in the plugin settings.

= Does this plugin work with all themes? =
Yes, the plugin is designed to work with most WordPress themes. If you encounter any issues, please contact the plugin author.

== Screenshots ==

1. Back to Top arrow in action.
2. Plugin settings page with customization options.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial release of the Back to Top Arrow (Global) plugin.

== Customization ==

You can further customize the plugin by editing the CSS and JavaScript files located in the `assets` folder. Ensure you follow WordPress coding standards when making changes.

== Developer Notes ==

The plugin follows WordPress coding standards and best practices. Below are some key details for developers:

- **Plugin Class**: `Back_To_Top_Global`
- **Settings Option**: `back_to_top_settings`
- **Hooks Used**:
  - `admin_menu`: Adds the settings page.
  - `admin_init`: Registers plugin settings.
  - `wp_enqueue_scripts`: Enqueues plugin assets.
  - `wp_footer`: Renders the Back to Top arrow.

== License ==

This plugin is licensed under the GPLv2 or later. See the [license file](https://www.gnu.org/licenses/gpl-2.0.html) for details.

== Credits ==

Developed by Sanket Thakkar.
