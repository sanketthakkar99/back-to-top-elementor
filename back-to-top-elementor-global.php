<?php
/**
 * Plugin Name: Back to Top Arrow (Global)
 * Description: Adds a global "Back to Top" arrow with options in the site settings.
 * Version: 1.0.0
 * Author: Sanket Thakkar
 * Text Domain: back-to-top-vip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Back_To_Top_Global {

    const SETTINGS_OPTION = 'back_to_top_settings';
    const VERSION = '1.0.0';

    public function __construct() {
        add_action( 'admin_menu', [ $this, 'back_to_top_add_settings_page' ] );
        add_action( 'admin_init', [ $this, 'back_to_top_register_settings' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'back_to_top_enqueue_assets' ] );
        add_action( 'wp_footer', [ $this, 'back_to_top_render_button' ] );
    }

    /**
     * Add settings page under "Settings".
     */
    public function back_to_top_add_settings_page() {
        add_options_page(
            esc_html__( 'Back to Top Settings', 'back-to-top-vip' ),
            esc_html__( 'Back to Top', 'back-to-top-vip' ),
            'manage_options',
            'back-to-top-settings',
            [ $this, 'back_to_top_render_settings_page' ]
        );
    }

    /**
     * Register plugin settings.
     */
    public function back_to_top_register_settings() {
        register_setting(
            self::SETTINGS_OPTION,
            self::SETTINGS_OPTION,
            [ $this, 'back_to_top_sanitize_settings' ]
        );

        add_settings_section(
            'general_settings',
            esc_html__( 'General Settings', 'back-to-top-vip' ),
            null,
            'back-to-top-settings'
        );

        add_settings_field(
            'position',
            esc_html__( 'Arrow Position', 'back-to-top-vip' ),
            [ $this, 'back_to_top_position_field' ],
            'back-to-top-settings',
            'general_settings'
        );

        add_settings_field(
            'background_color',
            esc_html__( 'Background Color', 'back-to-top-vip' ),
            [ $this, 'back_to_top_background_color_field' ],
            'back-to-top-settings',
            'general_settings'
        );

        add_settings_field(
            'text_color',
            esc_html__( 'Text Color', 'back-to-top-vip' ),
            [ $this, 'back_to_top_text_color_field' ],
            'back-to-top-settings',
            'general_settings'
        );
    }

    /**
     * Sanitize settings input.
     *
     * @param array $input The input data.
     * @return array Sanitized input data.
     */
    public function back_to_top_sanitize_settings( $input ) {
        $sanitized = [];

        $sanitized['position'] = isset( $input['position'] ) && in_array( $input['position'], [ 'right', 'left' ], true ) 
            ? sanitize_text_field( $input['position'] ) 
            : 'right';

        $sanitized['background_color'] = isset( $input['background_color'] ) 
            ? sanitize_hex_color( $input['background_color'] ) 
            : '#000000';

        $sanitized['text_color'] = isset( $input['text_color'] ) 
            ? sanitize_hex_color( $input['text_color'] ) 
            : '#ffffff';

        return $sanitized;
    }

    /**
     * Render position field.
     */
    public function back_to_top_position_field() {
        $options = get_option( self::SETTINGS_OPTION );
        $position = isset( $options['position'] ) ? $options['position'] : 'right';

        ?>
        <select name="<?php echo esc_attr( self::SETTINGS_OPTION ); ?>[position]">
            <option value="right" <?php selected( $position, 'right' ); ?>>
                <?php esc_html_e( 'Right', 'back-to-top-vip' ); ?>
            </option>
            <option value="left" <?php selected( $position, 'left' ); ?>>
                <?php esc_html_e( 'Left', 'back-to-top-vip' ); ?>
            </option>
        </select>
        <?php
    }

    /**
     * Render background color field.
     */
    public function back_to_top_background_color_field() {
        $options = get_option( self::SETTINGS_OPTION );
        $color = isset( $options['background_color'] ) ? $options['background_color'] : '#000000';

        ?>
        <input type="text" name="<?php echo esc_attr( self::SETTINGS_OPTION ); ?>[background_color]" 
            value="<?php echo esc_attr( $color ); ?>" 
            class="color-picker" 
            data-default-color="#000000" />
        <?php
    }

    /**
     * Render text color field.
     */
    public function back_to_top_text_color_field() {
        $options = get_option( self::SETTINGS_OPTION );
        $color = isset( $options['text_color'] ) ? $options['text_color'] : '#ffffff';

        ?>
        <input type="text" name="<?php echo esc_attr( self::SETTINGS_OPTION ); ?>[text_color]" 
            value="<?php echo esc_attr( $color ); ?>" 
            class="color-picker" 
            data-default-color="#ffffff" />
        <?php
    }

    /**
     * Output the settings page content.
     */
    public function back_to_top_render_settings_page() {
        ?>
        <div class="wrap">
            <h1><?php esc_html_e( 'Back to Top Settings', 'back-to-top-vip' ); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields( self::SETTINGS_OPTION );
                do_settings_sections( 'back-to-top-settings' );
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }

    /**
     * Enqueue plugin assets.
     */
    public function back_to_top_enqueue_assets() {
        wp_enqueue_style( 'back-to-top-style', plugin_dir_url( __FILE__ ) . 'assets/style.css', [], self::VERSION );
        wp_enqueue_script( 'back-to-top-script', plugin_dir_url( __FILE__ ) . 'assets/script.js', [ 'jquery' ], self::VERSION, true );
    }

    /**
     * Render the Back to Top arrow.
     */
    public function back_to_top_render_button() {
        $options = get_option( self::SETTINGS_OPTION );

        $position = isset( $options['position'] ) ? $options['position'] : 'right';
        $background_color = isset( $options['background_color'] ) ? $options['background_color'] : '#000000';
        $text_color = isset( $options['text_color'] ) ? $options['text_color'] : '#ffffff';

        echo sprintf(
            '<div class="back-to-top" style="background-color: %1$s; color: %2$s;" data-position="%3$s">%4$s</div>',
            esc_attr( $background_color ),
            esc_attr( $text_color ),
            esc_attr( $position ),
            esc_html__( '↑', 'back-to-top-vip' )
        );
    }
}

new Back_To_Top_Global();