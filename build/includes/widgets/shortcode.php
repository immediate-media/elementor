<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor shortcode widget.
 *
 * Elementor widget that insert any shortcodes into the page.
 *
 * @since 1.0.0
 */
class Widget_Shortcode extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve shortcode widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'shortcode';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve shortcode widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Shortcode', 'elementor' );
=======
		return __( 'Shortcode', 'elementor' );
>>>>>>> dist
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve shortcode widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-shortcode';
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'shortcode', 'code' ];
	}

	/**
	 * Whether the reload preview is required or not.
	 *
	 * Used to determine whether the reload preview is required.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return bool Whether the reload preview is required.
	 */
	public function is_reload_preview_required() {
		return true;
	}

	/**
	 * Register shortcode widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 3.1.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_shortcode',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Shortcode', 'elementor' ),
=======
				'label' => __( 'Shortcode', 'elementor' ),
>>>>>>> dist
			]
		);

		$this->add_control(
			'shortcode',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Enter your shortcode', 'elementor' ),
=======
				'label' => __( 'Enter your shortcode', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => '[gallery id="123" size="medium"]',
				'default' => '',
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render shortcode widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$shortcode = $this->get_settings_for_display( 'shortcode' );

		$shortcode = do_shortcode( shortcode_unautop( $shortcode ) );
		?>
<<<<<<< HEAD
		<div class="elementor-shortcode"><?php echo $shortcode; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></div>
=======
		<div class="elementor-shortcode"><?php echo $shortcode; ?></div>
>>>>>>> dist
		<?php
	}

	/**
	 * Render shortcode widget as plain content.
	 *
	 * Override the default behavior by printing the shortcode instead of rendering it.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function render_plain_content() {
		// In plain mode, render without shortcode
<<<<<<< HEAD
		$this->print_unescaped_setting( 'shortcode' );
=======
		echo $this->get_settings( 'shortcode' );
>>>>>>> dist
	}

	/**
	 * Render shortcode widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 2.9.0
	 * @access protected
	 */
	protected function content_template() {}
}
