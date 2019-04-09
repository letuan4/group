<?php


namespace App\Repositories\Eloquent;


abstract class EloquentRepository
{

    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll() {
        $result = $this->model->all();

        return $result;
    }
}