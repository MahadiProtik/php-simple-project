<?php

namespace App\classes;

class Product
{
    public $products = [];
    public function __construct()
    {
        $this->products = [
            0=>[
                "id"            => "1",
                "name"          => "New Smart T-Shirt",
                "price"         => "2500",
                "description"   => "New Smart T-Shirt Description",
                "image"         => "./assets/img/01-t-shirt.jpg"
            ],
            1=>[
                "id"            => "2",
                "name"          => "New Fashionable Sharee",
                "price"         => "7500",
                "description"   => "New Fashionable Sharee Description",
                "image"         => "./assets/img/04-sharee.jpg"
            ],
            2=>[
                "id"            => "3",
                "name"          => "New Smart Mobile",
                "price"         => "20500",
                "description"   => "New Smart Mobile Description",
                "image"         => "./assets/img/03-mobile.jpg"
            ],
            3=>[
                "id"            => "4",
                "name"          => "New Smart Watch",
                "price"         => "2500",
                "description"   => "New Smart Watch Description",
                "image"         => "./assets/img/05-watch.jpg"
            ]
        ];
    }
    public function getAllProduct()
    {
        return $this->products;
    }

}