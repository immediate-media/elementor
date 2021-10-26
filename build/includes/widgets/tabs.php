<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

/**
 * Elementor tabs widget.
 *
 * Elementor widget that displays vertical or horizontal tabs with different
 * pieces of content.
 *
 * @since 1.0.0
 */
class Widget_Tabs extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve tabs widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'tabs';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve tabs widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
<<<<<<< HEAD
		return esc_html__( 'Tabs', 'elementor' );
=======
		return __( 'Tabs', 'elementor' );
>>>>>>> dist
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve tabs widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-tabs';
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
		return [ 'tabs', 'accordion', 'toggle' ];
	}

	/**
	 * Register tabs widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 3.1.0
	 * @access protected
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_tabs',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Tabs', 'elementor' ),
=======
				'label' => __( 'Tabs', 'elementor' ),
>>>>>>> dist
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'tab_title',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Title & Description', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Tab Title', 'elementor' ),
				'placeholder' => esc_html__( 'Tab Title', 'elementor' ),
=======
				'label' => __( 'Title & Description', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => __( 'Tab Title', 'elementor' ),
				'placeholder' => __( 'Tab Title', 'elementor' ),
>>>>>>> dist
				'label_block' => true,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'tab_content',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Content', 'elementor' ),
				'default' => esc_html__( 'Tab Content', 'elementor' ),
				'placeholder' => esc_html__( 'Tab Content', 'elementor' ),
=======
				'label' => __( 'Content', 'elementor' ),
				'default' => __( 'Tab Content', 'elementor' ),
				'placeholder' => __( 'Tab Content', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::WYSIWYG,
				'show_label' => false,
			]
		);

		$this->add_control(
			'tabs',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Tabs Items', 'elementor' ),
=======
				'label' => __( 'Tabs Items', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
<<<<<<< HEAD
						'tab_title' => esc_html__( 'Tab #1', 'elementor' ),
						'tab_content' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ),
					],
					[
						'tab_title' => esc_html__( 'Tab #2', 'elementor' ),
						'tab_content' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ),
=======
						'tab_title' => __( 'Tab #1', 'elementor' ),
						'tab_content' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ),
					],
					[
						'tab_title' => __( 'Tab #2', 'elementor' ),
						'tab_content' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ),
>>>>>>> dist
					],
				],
				'title_field' => '{{{ tab_title }}}',
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

		$this->add_control(
			'type',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Position', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'horizontal',
				'options' => [
					'horizontal' => esc_html__( 'Horizontal', 'elementor' ),
					'vertical' => esc_html__( 'Vertical', 'elementor' ),
=======
				'label' => __( 'Position', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'horizontal',
				'options' => [
					'horizontal' => __( 'Horizontal', 'elementor' ),
					'vertical' => __( 'Vertical', 'elementor' ),
>>>>>>> dist
				],
				'prefix_class' => 'elementor-tabs-view-',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'tabs_align_horizontal',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'Start', 'elementor' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'elementor' ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => esc_html__( 'End', 'elementor' ),
						'icon' => 'eicon-h-align-right',
					],
					'stretch' => [
						'title' => esc_html__( 'Justified', 'elementor' ),
=======
				'label' => __( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => __( 'Start', 'elementor' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor' ),
						'icon' => 'eicon-h-align-center',
					],
					'end' => [
						'title' => __( 'End', 'elementor' ),
						'icon' => 'eicon-h-align-right',
					],
					'stretch' => [
						'title' => __( 'Justified', 'elementor' ),
>>>>>>> dist
						'icon' => 'eicon-h-align-stretch',
					],
				],
				'prefix_class' => 'elementor-tabs-alignment-',
				'condition' => [
					'type' => 'horizontal',
				],
			]
		);

		$this->add_control(
			'tabs_align_vertical',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => esc_html__( 'Start', 'elementor' ),
						'icon' => 'eicon-v-align-top',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'elementor' ),
						'icon' => 'eicon-v-align-middle',
					],
					'end' => [
						'title' => esc_html__( 'End', 'elementor' ),
						'icon' => 'eicon-v-align-bottom',
					],
					'stretch' => [
						'title' => esc_html__( 'Justified', 'elementor' ),
=======
				'label' => __( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'' => [
						'title' => __( 'Start', 'elementor' ),
						'icon' => 'eicon-v-align-top',
					],
					'center' => [
						'title' => __( 'Center', 'elementor' ),
						'icon' => 'eicon-v-align-middle',
					],
					'end' => [
						'title' => __( 'End', 'elementor' ),
						'icon' => 'eicon-v-align-bottom',
					],
					'stretch' => [
						'title' => __( 'Justified', 'elementor' ),
>>>>>>> dist
						'icon' => 'eicon-v-align-stretch',
					],
				],
				'prefix_class' => 'elementor-tabs-alignment-',
				'condition' => [
					'type' => 'vertical',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_tabs_style',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Tabs', 'elementor' ),
=======
				'label' => __( 'Tabs', 'elementor' ),
>>>>>>> dist
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'navigation_width',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Navigation Width', 'elementor' ),
=======
				'label' => __( 'Navigation Width', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'range' => [
					'%' => [
						'min' => 10,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-tabs-wrapper' => 'width: {{SIZE}}{{UNIT}}',
				],
				'condition' => [
					'type' => 'vertical',
				],
			]
		);

		$this->add_control(
			'border_width',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Border Width', 'elementor' ),
=======
				'label' => __( 'Border Width', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 1,
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-tab-title, {{WRAPPER}} .elementor-tab-title:before, {{WRAPPER}} .elementor-tab-title:after, {{WRAPPER}} .elementor-tab-content, {{WRAPPER}} .elementor-tabs-content-wrapper' => 'border-width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'border_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Border Color', 'elementor' ),
=======
				'label' => __( 'Border Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-tab-mobile-title, {{WRAPPER}} .elementor-tab-desktop-title.elementor-active, {{WRAPPER}} .elementor-tab-title:before, {{WRAPPER}} .elementor-tab-title:after, {{WRAPPER}} .elementor-tab-content, {{WRAPPER}} .elementor-tabs-content-wrapper' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'background_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Background Color', 'elementor' ),
=======
				'label' => __( 'Background Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-tab-desktop-title.elementor-active' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .elementor-tabs-content-wrapper' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_title',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Title', 'elementor' ),
=======
				'label' => __( 'Title', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'tab_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Color', 'elementor' ),
=======
				'label' => __( 'Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-tab-title, {{WRAPPER}} .elementor-tab-title a' => 'color: {{VALUE}}',
				],
				'global' => [
					'default' => Global_Colors::COLOR_PRIMARY,
				],
			]
		);

		$this->add_control(
			'tab_active_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Active Color', 'elementor' ),
=======
				'label' => __( 'Active Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-tab-title.elementor-active,
					 {{WRAPPER}} .elementor-tab-title.elementor-active a' => 'color: {{VALUE}}',
				],
				'global' => [
					'default' => Global_Colors::COLOR_ACCENT,
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'tab_typography',
				'selector' => '{{WRAPPER}} .elementor-tab-title',
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
				],
			]
		);

		$this->add_group_control(
<<<<<<< HEAD
			Group_Control_Text_Stroke::get_type(),
			[
				'name' => 'text_stroke',
				'selector' => '{{WRAPPER}} .elementor-tab-title',
			]
		);

		$this->add_group_control(
=======
>>>>>>> dist
			Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'title_shadow',
				'selector' => '{{WRAPPER}} .elementor-tab-title',
			]
		);

		$this->add_control(
			'title_align',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'elementor' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'elementor' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'elementor' ),
=======
				'label' => __( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'elementor' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'elementor' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'elementor' ),
>>>>>>> dist
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-tab-title' => 'text-align: {{VALUE}};',
				],
				'condition' => [
					'tabs_align' => 'stretch',
				],
			]
		);

		$this->add_control(
			'heading_content',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Content', 'elementor' ),
=======
				'label' => __( 'Content', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'content_color',
			[
<<<<<<< HEAD
				'label' => esc_html__( 'Color', 'elementor' ),
=======
				'label' => __( 'Color', 'elementor' ),
>>>>>>> dist
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-tab-content' => 'color: {{VALUE}};',
				],
				'global' => [
					'default' => Global_Colors::COLOR_TEXT,
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .elementor-tab-content',
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_TEXT,
				],
			]
		);

		$this->add_group_control(
			Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'content_shadow',
				'selector' => '{{WRAPPER}} .elementor-tab-content',
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render tabs widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$tabs = $this->get_settings_for_display( 'tabs' );

		$id_int = substr( $this->get_id_int(), 0, 3 );

		$a11y_improvements_experiment = Plugin::$instance->experiments->is_feature_active( 'a11y_improvements' );

		$this->add_render_attribute( 'elementor-tabs', 'class', 'elementor-tabs' );

		?>
<<<<<<< HEAD
		<div <?php $this->print_render_attribute_string( 'elementor-tabs' ); ?>>
=======
		<div <?php echo $this->get_render_attribute_string( 'elementor-tabs' ); ?>>
>>>>>>> dist
			<div class="elementor-tabs-wrapper" role="tablist" >
				<?php
				foreach ( $tabs as $index => $item ) :
					$tab_count = $index + 1;
					$tab_title_setting_key = $this->get_repeater_setting_key( 'tab_title', 'tabs', $index );
					$tab_title = $a11y_improvements_experiment ? $item['tab_title'] : '<a href="">' . $item['tab_title'] . '</a>';

					$this->add_render_attribute( $tab_title_setting_key, [
						'id' => 'elementor-tab-title-' . $id_int . $tab_count,
						'class' => [ 'elementor-tab-title', 'elementor-tab-desktop-title' ],
						'aria-selected' => 1 === $tab_count ? 'true' : 'false',
						'data-tab' => $tab_count,
						'role' => 'tab',
						'tabindex' => 1 === $tab_count ? '0' : '-1',
						'aria-controls' => 'elementor-tab-content-' . $id_int . $tab_count,
						'aria-expanded' => 'false',
					] );
					?>
<<<<<<< HEAD
					<div <?php $this->print_render_attribute_string( $tab_title_setting_key ); ?>><?php
						// PHPCS - the main text of a widget should not be escaped.
						echo $tab_title; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					?></div>
=======
					<div <?php echo $this->get_render_attribute_string( $tab_title_setting_key ); ?>><?php echo $tab_title; ?></div>
>>>>>>> dist
				<?php endforeach; ?>
			</div>
			<div class="elementor-tabs-content-wrapper" role="tablist" aria-orientation="vertical">
				<?php
				foreach ( $tabs as $index => $item ) :
					$tab_count = $index + 1;
					$hidden = 1 === $tab_count ? 'false' : 'hidden';
					$tab_content_setting_key = $this->get_repeater_setting_key( 'tab_content', 'tabs', $index );

					$tab_title_mobile_setting_key = $this->get_repeater_setting_key( 'tab_title_mobile', 'tabs', $tab_count );

					$this->add_render_attribute( $tab_content_setting_key, [
						'id' => 'elementor-tab-content-' . $id_int . $tab_count,
						'class' => [ 'elementor-tab-content', 'elementor-clearfix' ],
						'data-tab' => $tab_count,
						'role' => 'tabpanel',
						'aria-labelledby' => 'elementor-tab-title-' . $id_int . $tab_count,
						'tabindex' => '0',
						'hidden' => $hidden,
					] );

					$this->add_render_attribute( $tab_title_mobile_setting_key, [
						'class' => [ 'elementor-tab-title', 'elementor-tab-mobile-title' ],
						'aria-selected' => 1 === $tab_count ? 'true' : 'false',
						'data-tab' => $tab_count,
						'role' => 'tab',
						'tabindex' => 1 === $tab_count ? '0' : '-1',
						'aria-controls' => 'elementor-tab-content-' . $id_int . $tab_count,
						'aria-expanded' => 'false',
					] );

					$this->add_inline_editing_attributes( $tab_content_setting_key, 'advanced' );
					?>
<<<<<<< HEAD
					<div <?php $this->print_render_attribute_string( $tab_title_mobile_setting_key ); ?>><?php
						$this->print_unescaped_setting( 'tab_title', 'tabs', $index );
					?></div>
					<div <?php $this->print_render_attribute_string( $tab_content_setting_key ); ?>><?php
						$this->print_text_editor( $item['tab_content'] );
					?></div>
=======
					<div <?php echo $this->get_render_attribute_string( $tab_title_mobile_setting_key ); ?>><?php echo $item['tab_title']; ?></div>
					<div <?php echo $this->get_render_attribute_string( $tab_content_setting_key ); ?>><?php echo $this->parse_text_editor( $item['tab_content'] ); ?></div>
>>>>>>> dist
				<?php endforeach; ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Render tabs widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 2.9.0
	 * @access protected
	 */
	protected function content_template() {
		?>
		<div class="elementor-tabs" role="tablist" aria-orientation="vertical">
			<# if ( settings.tabs ) {
				var elementUid = view.getIDInt().toString().substr( 0, 3 ); #>
				<div class="elementor-tabs-wrapper" role="tablist">
					<# _.each( settings.tabs, function( item, index ) {
						var tabCount = index + 1,
							tabUid = elementUid + tabCount,
							tabTitleKey = 'tab-title-' + tabUid;

					view.addRenderAttribute( tabTitleKey, {
						'id': 'elementor-tab-title-' + tabUid,
						'class': [ 'elementor-tab-title','elementor-tab-desktop-title' ],
						'data-tab': tabCount,
						'role': 'tab',
						'tabindex': 1 === tabCount ? '0' : '-1',
						'aria-controls': 'elementor-tab-content-' + tabUid,
						'aria-expanded': 'false',
						} );
					#>
						<div {{{ view.getRenderAttributeString( tabTitleKey ) }}}>{{{ item.tab_title }}}</div>
					<# } ); #>
				</div>
				<div class="elementor-tabs-content-wrapper">
					<# _.each( settings.tabs, function( item, index ) {
						var tabCount = index + 1,
							tabContentKey = view.getRepeaterSettingKey( 'tab_content', 'tabs',index );

						view.addRenderAttribute( tabContentKey, {
							'id': 'elementor-tab-content-' + elementUid + tabCount,
							'class': [ 'elementor-tab-content', 'elementor-clearfix', 'elementor-repeater-item-' + item._id ],
							'data-tab': tabCount,
							'role' : 'tabpanel',
							'aria-labelledby' : 'elementor-tab-title-' + elementUid + tabCount
						} );

						view.addInlineEditingAttributes( tabContentKey, 'advanced' ); #>
						<div class="elementor-tab-title elementor-tab-mobile-title" data-tab="{{ tabCount }}" role="tab">{{{ item.tab_title }}}</div>
						<div {{{ view.getRenderAttributeString( tabContentKey ) }}}>{{{ item.tab_content }}}</div>
					<# } ); #>
				</div>
			<# } #>
		</div>
		<?php
	}
}
