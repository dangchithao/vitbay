<?php

Class Controller {
    /**
     *
     * @var type 
     */
    public $errors = array();

    /**
     * Model layer
     *
     * @var type 
     */
    protected $model;
    
    /**
     * Model name
     * @var type 
     */
    protected $modelName;

    /**
     * View layer
     * @var type 
     */
    protected $view;
    
    /**
     * Construct model and view
     */
    public function __construct() {
        // set model
        $this->setModel();
        
        $this->view = new View();
        $this->view->set('model', $this->modelName);
    }
    
    /**
     * load template
     * 
     * @param type $pathContent
     * @param type $data
     */
    protected function renderView($pathContent, $data = null) {
        // template path
        $view = strtolower($this->modelName) . DS . $pathContent;

        // set data to view
        $this->view->set('data', $data);
        $this->view->set('base_url', Tools::getBaseUrl());

        // display template
        $this->view->render($view);
    }
    
    /**
     * Set model
     */
    private function setModel() {
        $controllerName = get_class($this);
        $this->modelName = rtrim(str_replace('Controller', '', $controllerName));
        $model = ucfirst($this->modelName);
        
        $this->model = new $model();
    }            
}