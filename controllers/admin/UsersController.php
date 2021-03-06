<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class UsersController extends Controller {
	public function __construct() {
		$this->loadModel(array('Users'));

		parent::__construct();
	}

	public function indexAction() {
        if (!empty($_GET)) {
            $conditions = array();

            if (isset($_GET['id']) && Tools::notEmpty($_GET['id'])) {
                $conditions['id'] = $_GET['id'];
            }

            if (isset($_GET['login_id']) && Tools::notEmpty($_GET['login_id'])) {
                $conditions['login_id'] = "%" . $_GET['login_id'] . "%";
            }

            if (!empty($conditions)) {
                $this->model->Users->conditions = $conditions;
            }
        }

        $data = $this->model->Users->getList();
        $this->renderView('admin/users/index.tpl', $data);
    }

    public function addAction() {
        $this->renderView('add.tpl');
    }

}
