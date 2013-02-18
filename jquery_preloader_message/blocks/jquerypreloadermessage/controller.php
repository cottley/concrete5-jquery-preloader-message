<?php    
	defined('C5_EXECUTE') or die(_("Access Denied."));
	class JquerypreloadermessageBlockController extends BlockController {
		
		var $styleId;
		 
		protected $btTable = 'btJquerypreloadermessage';
		protected $btInterfaceWidth = "400";
		protected $btInterfaceHeight = "230";
				
		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Lets you add a block that will provide javascript to show and hide a loading message.");
		}
		
		public function getBlockTypeName() {
			return t("jQuery Preloader message");
		}
				
		function __construct($obj = null) {		
			parent::__construct($obj);	
		}
    
    public function on_page_view() {
      $bv = new BlockView();
      $bv->setBlockObject($this->getBlockObject());
      $blockURL = $bv->getBlockURL();
      $html = Loader::helper('html');            
      $this->addHeaderItem($html->css("{$blockURL}/colorbox-20130217/example1/colorbox.css"));
      $this->addHeaderItem($html->javascript("{$blockURL}/colorbox-20130217/jquery.colorbox.js"));
      $this->addHeaderItem($html->javascript("{$blockURL}/preloader/preload.js"));
      $pg = Page::getCurrentPage();
      $this->set('isEditMode', $pg->isEditMode());
		}
    
		function view(){ 
			$this->set('styleId', $this->styleId);	
		}
		
		function save($data) { 
			$args['styleId'] = isset($data['styleId']) ? trim($data['styleId']) : '';
			parent::save($args);
		}
		
	}
	
?>