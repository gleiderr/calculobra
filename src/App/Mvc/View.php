<?php  
namespace App\Mvc;
use Twig\Loader;

class View
{
    function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('./src/App/Mvc/Templates');
        $this->twig = new \Twig_Environment($loader);
    }

    public function showTypedTable($typedTable)
    {
        echo "<h1>Tabela Compilada</h1>";
        echo "<strong>Publicada 29/01/2019</strong>";
        $template = $this->twig->load('caldas_branco_table.html');
        echo $template->render(['rows' => $typedTable]);
    }

    public function showOriginalTable()
    {
        echo "<h1>Tabela Original</h1>";
        echo "<strong>Publicada 28/01/2019</strong>";
        echo '<img src="./tabela_caldas_branco.jpg" alt="Tabela Original Caldas Branco">';
    }
}