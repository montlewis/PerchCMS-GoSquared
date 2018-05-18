<?php
if (!$Settings->get('gs_api')->settingValue()) {
	$Alert->set('error', $Lang->get('There is no GoSquared API key set. Please add your key to <a href="../../../core/settings/">Perch Settings</a>.'));
	$Alert->output();
	echo($Alert);
} elseif (!$Settings->get('gs_site_id')->settingValue()) {
	$Alert->set('error', $Lang->get('There is no GoSquared token key set. Please add your token key to <a href="../../../core/settings/">Perch Settings</a>.'));
	$Alert->output();
	echo($Alert);
} else
{
echo('<iframe src="https://www.gosquared.com/labs/_embed/?api_key='.$Settings->get('gs_api')->settingValue().'&site_token='.$Settings->get('gs_site_id')->settingValue().'&dashboard=trends" width="100%" height="100%" frameborder="0"></iframe>');
}
