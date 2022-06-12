<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

// No direct access
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;
use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Language\Text;

/**
 * A ..
 *
 * @since  1.0
 */
class PlgSystemTufextensiontest extends CMSPlugin
{
	/**
	 * The language object
	 *
	 * @var null
	 * @since  1.0
	 */
	protected $lang = null;

	protected $langArray = null;

	/**
	 * Load the language file on instantiation.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * constructor, used to inject the language class for testing purposes
	 *
	 * @param   object  &$subject  The object to observe
	 * @param   array   $config    An optional associative array of configuration settings.
	 *                             Recognized key values include 'name', 'group', 'params', 'language'
	 *                             (this list is not meant to be comprehensive).
	 *
	 * @since  1.0
	 */
	public function __construct(&$subject, $config = array())
	{
		parent::__construct($subject, $config);
	}
}
