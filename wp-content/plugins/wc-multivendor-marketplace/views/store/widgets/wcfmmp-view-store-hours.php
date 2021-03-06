<?php
/**
 * The Template for displaying store sidebar hours.
 *
 * @package WCfM Markeplace Views Store Sidebar Hours
 *
 * For edit coping this to yourtheme/wcfm/store/widgets
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $WCFM, $WCFMmp;

foreach( $wcfm_store_hours_day_times as $wcfm_store_hours_day => $wcfm_store_hours_day_time ) {
	if( in_array( $wcfm_store_hours_day, $wcfm_store_hours_off_days ) ) continue;
	if( empty( $wcfm_store_hours_day_time['start'] ) || empty( $wcfm_store_hours_day_time['end'] ) ) continue;
	
	echo '<span class="wcfmmp-store-hours-day">' . $weekdays[$wcfm_store_hours_day] . "</span>: " . date_i18n( wc_time_format(), strtotime( $wcfm_store_hours_day_time['start'] ) ) . " - " . date_i18n( wc_time_format(), strtotime( $wcfm_store_hours_day_time['end'] ) );
	echo '<br />';
}

?>