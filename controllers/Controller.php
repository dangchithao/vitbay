<?php

Class Controller {

    /**
     *
     * @var type 
     */
    public $errors = array();

    /**
     *
     * @var type 
     */
    protected $model;

    /*
      Pagesize variable is number of record will show .
     */
    protected $pageSize;

    /*
      Number of Page after caculated .
     */
    protected $itemPerPage;
    protected $view;

    public function __construct() {
		$model = $this->getModelName();
		
		$this->model = new $model();
		
        $this->view = new View();
		$this->view->set('tabName', strtolower($model));
    }

    protected function renderView($pathContent, $data = null) {
        // template path
        $view = strtolower($this->getModelName()) . DS . $pathContent;

        // set data to view
        $this->view->set('data', $data);
		$this->view->set('base_url', Tools::getBaseUrl());

        // display template
        $this->view->render($view);
    }

    private function getModelName() {
        $controllerName = get_class($this);
        $modelName = trim(str_replace('Controller', '', $controllerName));
        return ucfirst($modelName);
    }

}
