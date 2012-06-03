<?php
/**
* Skin file for skin My Skin.
*
* @file
* @ingroup Skins
*/



/**
 * SkinTemplate class for My Skin skin
 * @ingroup Skins
 */
class SkinSaga extends SkinTemplate {

	var $skinname = 'saga', $stylename = 'saga',
		$template = 'SagaTemplate', $useHeadElement = true;

	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.saga" );
	}

}


?>