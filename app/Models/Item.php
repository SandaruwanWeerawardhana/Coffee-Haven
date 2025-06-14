<?php

namespace App\Models;
class Item{

    public static function all():array{
        return [
            [
                'id' => 1,
                'name' => 'Item A',
                'price' => 50000,
                'image' => 'item-a.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Item B',
                'price' => 70000,
                'image' => 'item-b.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Item C',
                'price' => 23000,
                'image' => 'item-c.jpg'
            ]

        ];
    }
}