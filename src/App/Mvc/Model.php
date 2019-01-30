<?php  
namespace App\Mvc;
class Model
{
    public function get() 
    {
        return "Hello Life";
    }

    public function getTypedTable()
    {
        $table = [
            ['traço' => [1.0, 1.0, 2.0], 'cimento' => 363, 'água' => 226],
            ['traço' => [1.0, 1.5, 3.0], 'cimento' => 273, 'água' => 189],
            ['traço' => [1.0, 2.0, 2.5], 'cimento' => 264, 'água' => 206],
            ['traço' => [1.0, 2.0, 3.0], 'cimento' => 243, 'água' => 210],
            ['traço' => [1.0, 2.5, 3.0], 'cimento' => 225, 'água' => 207],
            ['traço' => [1.0, 2.0, 4.0], 'cimento' => 210, 'água' => 202],
            ['traço' => [1.0, 2.5, 3.5], 'cimento' => 207, 'água' => 208],
            ['traço' => [1.0, 2.5, 4.0], 'cimento' => 195, 'água' => 201],
            ['traço' => [1.0, 2.5, 5.0], 'cimento' => 174, 'água' => 195],
            ['traço' => [1.0, 3.0, 5.0], 'cimento' => 162, 'água' => 202],
            ['traço' => [1.0, 3.0, 6.0], 'cimento' => 147, 'água' => 198],
            ['traço' => [1.0, 4.0, 8.0], 'cimento' => 114, 'água' => 194],
        ];

        for ($i=0; $i < count($table); $i++) { 
            $table[$i]['areia'] = $table[$i]['traço'][1] * $table[$i]['cimento'];
            $table[$i]['brita'] = $table[$i]['traço'][2] * $table[$i]['cimento'];
        }

        return $table;
    }
}