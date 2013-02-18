<?php   

defined('C5_EXECUTE') or die(_("Access Denied."));

class jquerypreloadermessagePackage extends Package {

	protected $pkgHandle = 'jquery_preloader_message';
	protected $appVersionRequired = '5.3.3'; 
	protected $pkgVersion = '1.0.0';
	
	public function getPackageDescription() {
		return t("Lets you add a block where you can call javascript to show or hide a loading message.");
	}
	
	public function getPackageName() {
		return t("Jquery-preloader-message");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('jquerypreloadermessage', $pkg);
		
	}

}