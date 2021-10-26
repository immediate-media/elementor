<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

/**
 * Elementor progress widget.
 *
 * Elementor widget that displays an escalating progress bar.
 *
 * @since 1.0.0
 */
class Widget_Progress extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve progress widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'progress';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve progress widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Progress Bar', 'elementor' );
=======
		return __( 'Progress Bar', 'elementor' );
>>>>>>> dist
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve progress widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-skill-bar';
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
		return [ 'progress', 'bar' ];
	}

	/**
	 * Register progress widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 3.1.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_progress',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Progress Bar', 'elementor' ),
=======
				'label' => __( 'Progress Bar', 'elementor' ),
>>>>>>> dist
			]
		);

		$this->add_control(
			'title',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Title', 'elementor' ),
=======
				'label' => __( 'Title', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
<<<<<<< HEAD
				'placeholder' => esc_html__( 'Enter your title', 'elementor' ),
				'default' => esc_html__( 'My Skill', 'elementor' ),
=======
				'placeholder' => __( 'Enter your title', 'elementor' ),
				'default' => __( 'My Skill', 'elementor' ),
>>>>>>> dist
				'label_block' => true,
			]
		);

		$this->add_control(
			'progress_type',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Type', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => esc_html__( 'Default', 'elementor' ),
					'info' => esc_html__( 'Info', 'elementor' ),
					'success' => esc_html__( 'Success', 'elementor' ),
					'warning' => esc_html__( 'Warning', 'elementor' ),
					'danger' => esc_html__( 'Danger', 'elementor' ),
=======
				'label' => __( 'Type', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'Default', 'elementor' ),
					'info' => __( 'Info', 'elementor' ),
					'success' => __( 'Success', 'elementor' ),
					'warning' => __( 'Warning', 'elementor' ),
					'danger' => __( 'Danger', 'elementor' ),
>>>>>>> dist
				],
			]
		);

		$this->add_control(
			'percent',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Percentage', 'elementor' ),
=======
				'label' => __( 'Percentage', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 50,
					'unit' => '%',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);

<<<<<<< HEAD
		$this->add_control(
			'display_percentage',
			[
				'label' => esc_html__( 'Display Percentage', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show',
				'options' => [
					'show' => esc_html__( 'Show', 'elementor' ),
					'hide' => esc_html__( 'Hide', 'elementor' ),
				],
			]
		);
=======
		$this->add_control( 'display_percentage', [
			'label' => __( 'Display Percentage', 'elementor' ),
			'type' => Controls_Manager::SELECT,
			'default' => 'show',
			'options' => [
				'show' => __( 'Show', 'elementor' ),
				'hide' => __( 'Hide', 'elementor' ),
			],
		] );
>>>>>>> dist

		$this->add_control(
			'inner_text',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Inner Text', 'elementor' ),
=======
				'label' => __( 'Inner Text', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
<<<<<<< HEAD
				'placeholder' => esc_html__( 'e.g. Web Designer', 'elementor' ),
				'default' => esc_html__( 'Web Designer', 'elementor' ),
=======
				'placeholder' => __( 'e.g. Web Designer', 'elementor' ),
				'default' => __( 'Web Designer', 'elementor' ),
>>>>>>> dist
				'label_block' => true,
			]
		);

		$this->add_control(
			'view',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'View', 'elementor' ),
=======
				'label' => __( 'View', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::HIDDEN,
				'default' => 'traditional',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_progress_style',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Progress Bar', 'elementor' ),
=======
				'label' => __( 'Progress Bar', 'elementor' ),
>>>>>>> dist
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'bar_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Color', 'elementor' ),
=======
				'label' => __( 'Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'global' => [
					'default' => Global_Colors::COLOR_PRIMARY,
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-progress-wrapper .elementor-progress-bar' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bar_bg_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Background Color', 'elementor' ),
=======
				'label' => __( 'Background Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-progress-wrapper' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'bar_height',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Height', 'elementor' ),
=======
				'label' => __( 'Height', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .elementor-progress-bar' => 'height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'bar_border_radius',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Border Radius', 'elementor' ),
=======
				'label' => __( 'Border Radius', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .elementor-progress-wrapper' => 'border-radius: {{SIZE}}{{UNIT}}; overflow: hidden;',
				],
			]
		);

		$this->add_control(
			'inner_text_heading',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Inner Text', 'elementor' ),
=======
				'label' => __( 'Inner Text', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'bar_inline_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Color', 'elementor' ),
=======
				'label' => __( 'Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-progress-bar' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'bar_inner_typography',
				'selector' => '{{WRAPPER}} .elementor-progress-bar',
				'exclude' => [
					'line_height',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'bar_inner_shadow',
				'selector' => '{{WRAPPER}} .elementor-progress-bar',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_title',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Title Style', 'elementor' ),
=======
				'label' => __( 'Title Style', 'elementor' ),
>>>>>>> dist
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Text Color', 'elementor' ),
=======
				'label' => __( 'Text Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-title' => 'color: {{VALUE}};',
				],
				'global' => [
					'default' => Global_Colors::COLOR_PRIMARY,
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography',
				'selector' => '{{WRAPPER}} .elementor-title',
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_TEXT,
				],
			]
		);

		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'title_shadow',
				'selector' => '{{WRAPPER}} .elementor-title',
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render progress widget output on the frontend.
	 * Make sure value does no exceed 100%.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		$progress_percentage = is_numeric( $settings['percent']['size'] ) ? $settings['percent']['size'] : '0';
		if ( 100 < $progress_percentage ) {
			$progress_percentage = 100;
		}

		$this->add_render_attribute( 'title', [
			'class' => 'elementor-title',
		]);

		$this->add_inline_editing_attributes( 'title' );

		$this->add_render_attribute( 'wrapper', [
			'class' => 'elementor-progress-wrapper',
			'role' => 'progressbar',
			'aria-valuemin' => '0',
			'aria-valuemax' => '100',
			'aria-valuenow' => $progress_percentage,
			'aria-valuetext' => $settings['inner_text'],
		] );

		if ( ! empty( $settings['progress_type'] ) ) {
			$this->add_render_attribute( 'wrapper', 'class', 'progress-' . $settings['progress_type'] );
		}

		$this->add_render_attribute( 'progress-bar', [
			'class' => 'elementor-progress-bar',
			'data-max' => $progress_percentage,
		] );

		$this->add_render_attribute( 'inner_text', [
			'class' => 'elementor-progress-text',
		] );

		$this->add_inline_editing_attributes( 'inner_text' );

		if ( ! Utils::is_empty( $settings['title'] ) ) { ?>
<<<<<<< HEAD
			<span <?php $this->print_render_attribute_string( 'title' ); ?>><?php $this->print_unescaped_setting( 'title' ); ?></span>
		<?php } ?>

		<div <?php $this->print_render_attribute_string( 'wrapper' ); ?>>
			<div <?php $this->print_render_attribute_string( 'progress-bar' ); ?>>
				<span <?php $this->print_render_attribute_string( 'inner_text' ); ?>><?php $this->print_unescaped_setting( 'inner_text' ); ?></span>
				<?php if ( 'hide' !== $settings['display_percentage'] ) { ?>
					<span class="elementor-progress-percentage"><?php echo $progress_percentage; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>%</span>
=======
			<span <?php echo $this->get_render_attribute_string( 'title' ); ?>><?php echo $settings['title']; ?></span>
		<?php } ?>

		<div <?php echo $this->get_render_attribute_string( 'wrapper' ); ?>>
			<div <?php echo $this->get_render_attribute_string( 'progress-bar' ); ?>>
				<span <?php echo $this->get_render_attribute_string( 'inner_text' ); ?>><?php echo $settings['inner_text']; ?></span>
				<?php if ( 'hide' !== $settings['display_percentage'] ) { ?>
					<span class="elementor-progress-percentage"><?php echo $progress_percentage; ?>%</span>
>>>>>>> dist
				<?php } ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Render progress widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 2.9.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<#
		let progress_percentage = 0;
		if ( ! isNaN( settings.percent.size ) ) {
			progress_percentage = 100 < settings.percent.size ? 100 : settings.percent.size;
		}

		view.addRenderAttribute( 'title', {
			'class': 'elementor-title'
		} );

		view.addInlineEditingAttributes( 'title' );

		view.addRenderAttribute( 'progressWrapper', {
			'class': [ 'elementor-progress-wrapper', 'progress-' + settings.progress_type ],
			'role': 'progressbar',
			'aria-valuemin': '0',
			'aria-valuemax': '100',
			'aria-valuenow': progress_percentage,
			'aria-valuetext': settings.inner_text
		} );

		view.addRenderAttribute( 'inner_text', {
			'class': 'elementor-progress-text'
		} );

		view.addInlineEditingAttributes( 'inner_text' );
		#>
		<# if ( settings.title ) { #>
			<span {{{ view.getRenderAttributeString( 'title' ) }}}>{{{ settings.title }}}</span><#
		} #>
		<div {{{ view.getRenderAttributeString( 'progressWrapper' ) }}}>
			<div class="elementor-progress-bar" data-max="{{ progress_percentage }}">
				<span {{{ view.getRenderAttributeString( 'inner_text' ) }}}>{{{ settings.inner_text }}}</span>
				<# if ( 'hide' !== settings.display_percentage ) { #>
					<span class="elementor-progress-percentage">{{{ progress_percentage }}}%</span>
				<# } #>
			</div>
		</div>
		<?php
	}
}
