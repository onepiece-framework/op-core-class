<?php
/**	op-core-class:/Session.class.php
 *
 * @genesis    2011-??-??
 * @created    2021-05-15
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage class
 * @copyright  (C) 2011 Tomoaki Nagahara
 */

/**	namespace
 *
 */
namespace OP;

/**	Session
 *
 * <pre>
 * //  Save the value in the session.
 * $val = Session::Set('key', 'saved value');
 *
 * //  Gets the value saved in the session.
 * $val = Session::Get('key', 'default value, in case of null');
 * </pre>
 *
 * @created    2021-05-15
 */
class Session
{
	/**	trait.
	 *
	 */
	use OP_CORE, OP_SESSION, OP_CI;

	/**	Get session value.
	 *
	 * @created   2021-05-15
	 * @param     string       $key
	 * @param     mixed        $default
	 * @return    mixed
	 */
	static function Get(string $key, $default=null)
	{
		return self::Session()[$key] ?? $default;
	}

	/**	Set session value.
	 *
	 * @created   2021-05-15
	 * @param     string       $key
	 * @param     mixed        $val
	 */
	static function Set(string $key, $val)
	{
		self::Session()[$key] = $val;
	}
}
