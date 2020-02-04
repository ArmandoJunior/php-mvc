<?php


namespace App\Controllers;


use App\Models\Product;
use App\Models\User;
use JRN\Controller;

class ProductsController extends Controller
{
    /**
     * @var Product
     */
    private $productModel;
    /**
     * @var User
     */
    private $userModel;

    public function __construct(Product $productModel, User $userModel)
    {
        var_dump(get_class($productModel));
        var_dump(get_class($userModel));
        $this->productModel = $productModel;
        $this->userModel = $userModel;
    }

    public function index()
    {
        $data = $this->userModel->get();
        $this->render($data);
    }
}