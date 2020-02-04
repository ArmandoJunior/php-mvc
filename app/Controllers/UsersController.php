<?php

namespace App\Controllers;


use App\Models\User;
use JRN\Controller;

class UsersController extends Controller
{
    /**
     * UsersController constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        var_dump(get_class($model));
        $this->model = $model;
    }

    public function index()
    {
        $data = $this->model->get();
        $this->render($data);
    }

    public function create()
    {
        echo 'Create User Action';
    }
}