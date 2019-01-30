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

    public function header()
    {
        echo $this->twig->load('header.html')->render();
    }

    public function footer()
    {
        echo $this->twig->load('footer.html')->render();
    }

    public function showTypedTable($typedTable)
    {   
        echo "<h4>Tabela Compilada</h4>";
        echo "<strong><small>Publicada 29/01/2019 - Editada 30/01/2019</small></strong><br>";
        echo $this->twig->load('caldas_branco_table.html')->render(['rows' => $typedTable]);
    }

    public function showOriginalTable()
    {
        echo "<h4>Tabela Original</h4>";
        echo "<strong><small>Publicada 28/01/2019</small></strong><br>";
        echo '<img src="./tabela_caldas_branco.jpg" alt="Tabela Original Caldas Branco">';
    }
}