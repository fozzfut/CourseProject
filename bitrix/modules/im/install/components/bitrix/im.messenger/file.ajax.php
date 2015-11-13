<?
if (!defined('IM_AJAX_INIT'))
{
	define("IM_AJAX_INIT", true);
	define("PUBLIC_AJAX_MODE", true);
	define("NO_KEEP_STATISTIC", "Y");
	define("NO_AGENT_STATISTIC","Y");
	define("NO_AGENT_CHECK", true);
	define("DisableEventsCheck", true);

	if (isset($_GET['action']))
	{
		require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
		if (CModule::IncludeModule('disk'))
		{
			$ufController = new Bitrix\Disk\Uf\Controller();
			$ufController->setActionName($_GET['action'])->exec();
		}
		die();
	}

	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
}

echo CUtil::PhpToJsObject(Array(
	'BITRIX_SESSID' => bitrix_sessid(),
	'ERROR' => 'FILE_ERROR'
));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>