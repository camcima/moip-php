<?php
	
namespace Moip;

/**
 * Library to help PHP users of Moip's API
 *
 * @author Herberth Amaral
 * @author Wesley Willians
 * @author Alê Borba
 * @author Vagner Fiuza Vieira
 * @author Paulo Cesar
 * @version 1.6
 * @license <a href="http://www.opensource.org/licenses/bsd-license.php">BSD License</a>
 */

class MoipEnvironment {
	public $base_url;
	public $name;

	public function __construct($base_url = '', $name = '')
	{
		$this->base_url = $base_url;
		$this->name = $name;
	}
}