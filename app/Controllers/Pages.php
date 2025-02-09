<?php

Class Pages extends Controller{

    private $model;

    public function __construct(){
        $this->model = $this->model('API');
    }
    function index(){
        $fromAPI = $this->model->getdatafromapi();
        $data = ['data' => $fromAPI];
        $this->view('index', $data);
    }
}