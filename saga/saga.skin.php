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

/**
 * BaseTemplate class for My Skin skin
 * @ingroup Skins
 */
class SagaTemplate extends BaseTemplate {

	/**
	 * Outputs the entire contents of the page
	 */
	public function execute() {
		// Suppress warnings to prevent notices about missing indexes in $this->data
		wfSuppressWarnings();

		$this->html( 'headelement' ); ?>

// [...]

<?php $this->printTrail(); ?>
</body>
</html><?php
		wfRestoreWarnings();
	}

}

?>