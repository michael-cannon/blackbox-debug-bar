<?php
/**
 * BlackBox WordPress globals class
 *
 * @author Michael Cannon <mc@aihr.us>
 * @package BlackBox
 * @license GPL
 */


class BlackBox_WPGlobals {
	private static $definable = null;
	private static $defined   = array();

	public function __construct() {
		self::setDefinable();
		self::setDefined();
	}


	protected static function setDefinable() {
		self::$definable = array(
			'_menu_item_sort_prop',
			'_wp_deprecated_widgets_callbacks',
			'_wp_sidebars_widgets',
			'_wp_switched_stack',
			'blog_id',
			'body_id',
			'comment',
			'comment_depth',
			'content_width',
			'current_screen',
			'current_site',
			'current_user',
			'custom_background',
			'custom_image_header',
			'debug',
			'editor_styles',
			'hook_suffix',
			'is_opera',
			'link',
			'login_grace_period',
			'merged_filters',
			'month',
			'month_abbrev',
			'more',
			'post',
			'post_ID',
			'posts',
			'query_string',
			'request',
			'screen_layout_columns',
			'single',
			'switched',
			'tab',
			'table_prefix',
			'text_direction',
			'type',
			'user_ID',
			'weekday',
			'weekday_abbrev',
			'weekday_initial',
			'wp_customize',
			'wp_embed',
			'wp_locale',
			'wp_query',
			'wp_rewrite',
			'wp_roles',
			'wp_settings',
			'wp_the_query',
			'wp_version',
			'wp_widget_factory',
			'xmlrpc_logging',
			// long arrays left to last
			'wp_filter',
			'wp_object_cache',
			'wp_post_types',
			'wp_taxonomies',
			'wpdb',
		);
	}


	protected static function setDefined() {
		foreach ( self::$definable as $value ) {
			if ( isset( $GLOBALS[ $value ] ) )
				self::$defined[ $value ] = $GLOBALS[ $value ];
		}
	}


	public function getDefined() {
		return self::$defined;
	}


}
