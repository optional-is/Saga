<?php
/**
 * My Skin skin
 *
 * @file
 * @ingroup Skins
 * @author Brian Suda (http://suda.co.uk)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Saga',
	'url' => "https://github.com/optional-is/Saga",
	'author' => '[http://en.wikipedia.org/wiki/Brian_Suda]',
	'descriptionmsg' => 'saga-desc',
);

$wgValidSkinNames['saga'] = 'Saga';
$wgAutoloadClasses['SkinSaga'] = dirname(__FILE__).'/saga.skin.php';
$wgExtensionMessagesFiles['Saga'] = dirname(__FILE__).'/saga.i18n.php';

$wgResourceModules['skins.saga'] = array(
	'styles' => array(
		'saga/css/screen.css' => array( 'media' => 'screen' ),
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);

?>