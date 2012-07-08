<?php
$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_cocoiti','0.1');

App::uses('CakeEventManager', 'Event');
CakeEventManager::instance()->attach('cocoiti_omedetou', 'Helper.Candy.afterTextilizable');


function cocoiti_omedetou($event) {
	$event->data['text'] = cocoiti_convert($event->data['text']);
}

function cocoiti_convert($str) {
	return str_replace('個々一番', '<strong style="font-size:large; color:#F00;">個々一番(新婚)</strong>', $str);
}
