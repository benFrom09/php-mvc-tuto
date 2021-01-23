<?php
namespace Framework;



class Controller
{
    public string $layout = 'main';
    /**
     * Undocumented function
     *
     * @param string $view
     * @param array|null $params
     * @return void
     */
    public function render(string $view,?array $params =[]) {
        return App::$app->router->renderView($view,$params);
    }

    public function setLayout(string $layout) {
        $this->layout = $layout;
    }
}