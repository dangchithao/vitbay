<?php

Class Controller {
    /**
     * errors
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
     * View layer
     * @var type 
     */
    protected $view;
    
    /**
     * Construct model and view
     */
    public function __construct() {
        // model
        $this->setModel();

        // view
        $this->view = new View();
        $this->view->set('model', $model);
    }
    
    /**
     * load template
     * 
     * @param type $pathContent
     * @param type $data
     */
    protected function renderView($pathContent, $data = null) {
        // template path
        $view = strtolower($this->getModelName()) . DS . $pathContent;

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
        $modelName = rim(str_replace('Controller', '', $controllerName));
        $model = ucfirst($modelName);
        
        $this->model = new $model();
    }            
}