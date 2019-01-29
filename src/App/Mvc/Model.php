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
        return [
            ['traço' => [1.0, 1.0, 2.0], 'cimento(ℓ)' => 363, 'água' => 226],
            ['traço' => [1.0, 1.5, 3.0], 'cimento(ℓ)' => 273, 'água' => 189],
            ['traço' => [1.0, 2.0, 2.5], 'cimento(ℓ)' => 264, 'água' => 206],
            ['traço' => [1.0, 2.0, 3.0], 'cimento(ℓ)' => 243, 'água' => 210],
            ['traço' => [1.0, 2.5, 3.0], 'cimento(ℓ)' => 225, 'água' => 207],
            ['traço' => [1.0, 2.0, 4.0], 'cimento(ℓ)' => 210, 'água' => 202],
            ['traço' => [1.0, 2.5, 3.5], 'cimento(ℓ)' => 207, 'água' => 208],
            ['traço' => [1.0, 2.5, 4.0], 'cimento(ℓ)' => 195, 'água' => 201],
            ['traço' => [1.0, 2.5, 5.0], 'cimento(ℓ)' => 174, 'água' => 195],
            ['traço' => [1.0, 3.0, 5.0], 'cimento(ℓ)' => 162, 'água' => 202],
            ['traço' => [1.0, 3.0, 6.0], 'cimento(ℓ)' => 147, 'água' => 198],
            ['traço' => [1.0, 4.0, 8.0], 'cimento(ℓ)' => 114, 'água' => 194],
        ];
    }
}