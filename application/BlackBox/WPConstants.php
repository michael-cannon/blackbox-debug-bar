<?php
/**
 * BlackBox WordPress constants class
 *
 * @author Michael Cannon <mc@aihr.us>
 * @package BlackBox
 * @license GPL
 */


class BlackBox_WPConstants {

	public function __construct() {}


	public function getDefined() {
		$constants = get_defined_constants( true );

		return $constants['user'];
	}

}
