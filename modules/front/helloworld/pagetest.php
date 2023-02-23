<?php


namespace IPS\helloworld\modules\front\helloworld;

/* To prevent PHP errors (extending class does not exist) revealing path */

if (!\defined('\IPS\SUITE_UNIQUE_KEY')) {
	header((isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0') . ' 403 Forbidden');
	exit;
}

/**
 * pagetest
 */
class _pagetest extends \IPS\Dispatcher\Controller
{
	/**
	 * Execute
	 *
	 * @return	void
	 */
	public function execute()
	{
		\IPS\Output::i()->cssFiles = array_merge(\IPS\Output::i()->cssFiles, \IPS\Theme::i()->css('pagetest.css', 'helloworld', 'front'));
		parent::execute();
	}

	/**
	 * ...
	 *
	 * @return	void
	 */
	protected function manage()
	{
		\IPS\Output::i()->title = \IPS\Member::loggedIn()->language()->addToStack('hello_world_test_page');
		\IPS\Output::i()->breadcrumb[] = [null, \IPS\Member::loggedIn()->language()->addToStack('hello_world_test_page')];
		\IPS\Output::i()->output = \IPS\Theme::i()->getTemplate('pagetest', 'helloworld', 'front')->index();
	}

	// Create new methods with the same name as the 'do' parameter which should execute it
}
