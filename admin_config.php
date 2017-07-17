<?php
require_once('../../class2.php');
if ( ! getperms('P')) {
	e107::redirect('admin');
	exit;
}

e107::lan('mentions', 'admin', true);

class mentions_adminArea extends e_admin_dispatcher
{
	protected $modes = [
		'main' => [
			'controller' => 'mentions_ui',
			'path' => null,
			'ui' => 'mentions_form_ui',
			'uipath' => null
		]
	];

	protected $adminMenu = [

		'main/prefs' => ['caption'=> LAN_PREFS, 'perm' => 'P']

	];

	protected $menuTitle = 'Mentions';

}

class mentions_ui extends e_admin_ui
{
	protected $pluginTitle = 'Mentions';

	protected $pluginName = 'mentions';



	protected $prefs = [
		'mentions_active' => [
			'title'=> 'Enable/Disable',
			'tab'=> 0,
			'type'=>'boolean',
			'data' => 'int',
			'help'=>'Turn On/Off Mentions Globally'
		],
		'mentions_context' => [
			'title' => 'Mentions Context (For Content)',
			'tab'   => 0,
			'type'  => 'dropdown',
			'size'  => 'xxlarge',
			'data'  => 'int',
			'help'  => 'Mentions is called in what text parse context.',
		],
	];

	protected $fieldpref = [];


	public function init ()
	{
	}


}





class mentions_form_ui extends e_admin_form_ui
{
}






new mentions_adminArea();

require_once(e_ADMIN."auth.php");

e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;
