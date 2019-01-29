<?php  
namespace App\Mvc;
class View
{

    public function showTypedTable($typedTable)
    {
        print_r($typedTable);
    }

    public function showOriginalTable()
    {
        echo "<h1>Tabela Original</h1>";
        echo "<strong>Publicada 28/01/2019</strong>";
    }
}