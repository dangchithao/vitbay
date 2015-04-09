<?php
/**
 * View layer
 * @coding by Dang Chi Thao - 2014.09.24
 */
class View {
	/**
	 * Data to assign view
	 * @var type 
	 */
    protected $data;
	
	/**
	 * Smarty template engine
	 * @var type 
	 */
    protected $smarty;

    function __construct() {
        $this->data = array();
        //View
        $this->smarty = new Smarty();
        $this->smarty->setTemplateDir('./views/templates/');
        $this->smarty->setCompileDir('./views/templates_c/');
        $this->smarty->setConfigDir('./views/configs/');
        $this->smarty->setCacheDir('./views/cache/');
        //$this->smarty->debugging = true;
    }
	
	/**
	 * Assign variable to view
	 * @param type $key
	 * @param type $val
	 */
    public function set($key, $val) {
        $this->smarty->assign($key, $val);
    }
	
	/**
	 * Template render
	 * @param type $view: template's path.
	 */
    public function render($view) {
		// Header
        $this->smarty->display('layout' . DS . 'header.tpl');
		
		// Content
        $this->smarty->display($view);
		
		// Footer
        $this->smarty->display('layout' . DS . 'footer.tpl');
    }

}
