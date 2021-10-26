<?php
namespace Elementor;

use Elementor\Core\Breakpoints\Breakpoint;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// TODO: Use API data instead of this static array, once it is available.
<<<<<<< HEAD
$active_breakpoints = Plugin::$instance->breakpoints->get_active_breakpoints();
$active_devices = Plugin::$instance->breakpoints->get_active_devices_list( [ 'reverse' => true ] );

$breakpoint_classes_map = array_intersect_key( Plugin::$instance->breakpoints->get_responsive_icons_classes_map(), array_flip( $active_devices ) );

/* translators: %1$s: Device Name */
$breakpoint_label = esc_html__( '%1$s <br> Settings added for the %1$s device will apply to %2$spx screens and down', 'elementor' );
?>

<script type="text/template" id="tmpl-elementor-templates-responsive-bar">
	<div id="e-responsive-bar__center">
		<div id="e-responsive-bar-switcher" class="e-responsive-bar--pipe">
			<?php foreach ( $active_devices as $device_key ) {
				if ( 'desktop' === $device_key ) {
					$tooltip_label = esc_html__( 'Desktop <br> Settings added for the base device will apply to all breakpoints unless edited', 'elementor' );
				} elseif ( 'widescreen' === $device_key ) {
					$tooltip_label = esc_html__( 'Widescreen <br> Settings added for the Widescreen device will apply to screen sizes %dpx and up', 'elementor' );

					$tooltip_label = sprintf( $tooltip_label, $active_breakpoints[ $device_key ]->get_value() );
				} else {
					$tooltip_label = sprintf( $breakpoint_label, $active_breakpoints[ $device_key ]->get_label(), $active_breakpoints[ $device_key ]->get_value() );
				}
				printf( '<label
					id="e-responsive-bar-switcher__option-%1$s"
					class="e-responsive-bar-switcher__option"
=======
$breakpoints = Plugin::$instance->breakpoints->get_active_breakpoints();

$breakpoints['desktop'] = [];

$breakpoint_label = __( 'Settings added to %1$s device will apply to %2$spx screens and down', 'elementor' );
?>

<script type="text/template" id="tmpl-elementor-templates-responsive-bar">
		<div class="e-responsive-bar__col"></div>
		<div class="e-responsive-bar__col">
			<div class="e-responsive-bar-switcher">
			<?php foreach ( $breakpoints as $name => $breakpoint ) {
				if ( 'desktop' === $name ) {
					$tooltip_label = __( 'Settings added to Base device will apply to all breakpoints unless edited', 'elementor' );
				} else {
					$tooltip_label = sprintf( $breakpoint_label, $breakpoint->get_label(), $breakpoint->get_value() );
				}
				printf( '<label
					class="e-responsive-bar-switcher__option e-responsive-bar-switcher__option-%1$s"
>>>>>>> dist
					for="e-responsive-bar-switch-%1$s"
					data-tooltip="%2$s">

					<input type="radio" name="breakpoint" id="e-responsive-bar-switch-%1$s" value="%1$s">
<<<<<<< HEAD
					<i class="%3$s" aria-hidden="true"></i>
					<span class="screen-reader-text">%2$s</span>
				</label>', esc_attr( $device_key ), esc_attr( $tooltip_label ), esc_attr( $breakpoint_classes_map[ $device_key ] ) );
			} ?>
			</div>
			<div id="e-responsive-bar-scale">
				<div id="e-responsive-bar-scale__minus"></div>
				<div id="e-responsive-bar-scale__value-wrapper"><span id="e-responsive-bar-scale__value">100</span>%</div>
				<div id="e-responsive-bar-scale__plus"><i class="eicon-plus" aria-hidden="true"></i></div>
				<div id="e-responsive-bar-scale__reset"><i class="eicon-undo" aria-hidden="true"></i></div>
			</div>
		</div>
		<div id="e-responsive-bar__end">
			<div id="e-responsive-bar__size-inputs-wrapper" class="e-flex e-align-items-center">
				<label for="e-responsive-bar__input-width">W</label>
				<input type="number" id="e-responsive-bar__input-width" class="e-responsive-bar__input-size" autocomplete="off">
				<label for="e-responsive-bar__input-height">H</label>
				<input type="number" id="e-responsive-bar__input-height" class="e-responsive-bar__input-size" autocomplete="off">
			</div>
			<button id="e-responsive-bar__settings-button" class="e-responsive-bar__button e-responsive-bar--pipe"
					data-tooltip="<?php echo esc_html__( 'Manage Breakpoints', 'elementor' ); ?>">
				<span class="elementor-screen-only"><?php echo esc_html__( 'Settings', 'elementor' ); ?></span>
				<i class="eicon-cog" aria-hidden="true"></i>
			</button>
			<button id="e-responsive-bar__close-button" class="e-responsive-bar__button"
					data-tooltip="<?php echo esc_html__( 'Close', 'elementor' ); ?>">
				<span class="elementor-screen-only"><?php echo esc_html__( 'Close', 'elementor' ); ?></span>
				<i class="eicon-close" aria-hidden="true"></i>
			</button>
=======
					<i class="eicon-device-%1$s" aria-hidden="true"></i>
					<span class="screen-reader-text">%2$s</span>
				</label>', $name, $tooltip_label );
			} ?>
			</div>
		</div>
		<div class="e-responsive-bar__col">
			<button class="e-responsive-bar__close-button e-responsive-bar__button"
					data-tooltip="<?php echo __( 'Exit', 'elementor' ); ?>">
				<span class="elementor-screen-only"><?php echo __( 'Close', 'elementor' ); ?></span>
				<i class="eicon-close" aria-hidden="true"></i>
			</button>
			<button class="e-responsive-bar__settings-button e-responsive-bar__button"
					data-tooltip="<?php echo __( 'Manage Breakpoints', 'elementor' ); ?>">
				<span class="elementor-screen-only"><?php echo __( 'Settings', 'elementor' ); ?></span>
				<i class="eicon-cog" aria-hidden="true"></i>
			</button>
			<div class="e-flex e-align-items-center e-responsive-bar__size-inputs-wrapper">
				<label for="viewport_width">W</label>
				<input type="number" id="viewport_width" class="e-responsive-bar__input-size e-responsive-bar__input-width" autocomplete="off">
				<label for="viewport_height">H</label>
				<input type="number" id="viewport_height" class="e-responsive-bar__input-size e-responsive-bar__input-height" autocomplete="off">
			</div>
>>>>>>> dist
		</div>
</script>
