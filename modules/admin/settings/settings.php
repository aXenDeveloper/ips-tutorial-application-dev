<?php


namespace IPS\helloworld\modules\admin\settings;

/* To prevent PHP errors (extending class does not exist) revealing path */

if (!\defined('\IPS\SUITE_UNIQUE_KEY')) {
	header((isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0') . ' 403 Forbidden');
	exit;
}

/**
 * settings
 */
class _settings extends \IPS\Dispatcher\Controller
{
	/**
	 * Execute
	 *
	 * @return	void
	 */
	public function execute()
	{
		\IPS\Dispatcher::i()->checkAcpPermission('settings_manage');
		parent::execute();
	}

	/**
	 * ...
	 *
	 * @return	void
	 */
	protected function manage()
	{
		$form = new \IPS\Helpers\Form;
		$form->add(new \IPS\Helpers\Form\Text('aXenHelloWorld_settings_title', \IPS\Settings::i()->aXenHelloWorld_settings_title));

		if ($values = $form->values(true)) {
			$form->saveAsSettings($values);

			\IPS\Output::i()->redirect(\IPS\Http\Url::internal('app=helloworld&module=settings&controller=settings'), 'saved');
		}

		\IPS\Output::i()->title = \IPS\Member::loggedIn()->language()->addToStack('menu__helloworld_settings_settings');
		\IPS\Output::i()->output = $form;
	}
}
