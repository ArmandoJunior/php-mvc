<?php


namespace JRN;


class Controller
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Controller constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    protected function render(array $data = [], string $view = null)
    {
        if (!$view) {
            $view = $this->controllerName() . '/' . debug_backtrace()[1]['function'];
//            var_dump($view);

        }

        extract($data);
        require __DIR__ . '/../templates/' . $view . '.tpl.php';

    }

    private function controllerName()
    {
        $class = get_class($this); // App/Controllers/UsersController
        $class = explode('\\', $class); // ['App'], ['Controllers'], ['UsersController']
        $class = array_pop( $class); // UsersController
        $class = preg_replace('/Controller$/', '', $class); // User
        return strtolower($class); // user
    }

}