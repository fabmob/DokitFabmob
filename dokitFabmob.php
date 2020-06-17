<?php

$wgMessagesDirs['DokitFabmob'] = __DIR__ . "/i18n";

$wgResourceModules['ext.DokitFabmob.css'] = array(
		'styles' => array('style.css'),
		'position' => 'top',
		'localBasePath' => __DIR__ . '',
		'remoteExtPath' => 'DokitFabmob',
);
$wgResourceModules['ext.DokitFabmob.js'] = array(
	'scripts' => 'style.js',
	'messages' => array(
	),
	'dependencies' => array(
			'jquery.ui.core'
	),
	'position' => 'bottom',
	'localBasePath' => __DIR__ . '',
	'remoteExtPath' => 'DokitFabmob',
);

$wgMessagesDirs['DokitFabmob'] = __DIR__ . '/i18n';


function dokitFabmobBeforePageDisplay( $out, $skin ) {

	$out->addModuleStyles(
		array(
				'ext.DokitFabmob.css'
		)
	);
	$out->addModules( array( 'ext.DokitFabmob.js' ) );

	return true;
}

$wgHooks['BeforePageDisplay'][] = 'dokitFabmobBeforePageDisplay';

$wgAutoloadClasses['Skins\\Chameleon\\Components\\FabmobNavbarHorizontal'] = __DIR__ . "/chameleon-component/FabmobNavbarHorizontal.php";
$wgAutoloadClasses['Skins\\Chameleon\\Components\\FabmobFooter'] = __DIR__ . "/chameleon-component/FabmobFooter.php";
$wgAutoloadClasses['Skins\\Chameleon\\Components\\FabmobButtonBar'] = __DIR__ . "/chameleon-component/FabmobButtonBar.php";

