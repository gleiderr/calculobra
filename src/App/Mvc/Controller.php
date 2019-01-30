<?php  
namespace App\Mvc;
class Controller
{
    public function index()
    {
        $model = new Model;
        $view = new View;

        $view->header();
        $view->showTypedTable($model->getTypedTable());
        $view->showOriginalTable();
        $view->footer();
    }
}