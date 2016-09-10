<?php

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
   
    public function addToCart($product, $quanty = 1)
    {
        if (isset($_SESSION['cart'][$product->id]))
        {
            $_SESSION['cart'][$product->id]['quanty'] += $quanty;
        }else
        {
            $_SESSION['cart'][$product->id] = 
                    [
                        'quanty' => $quanty,
                        'name' => $product->name,
                        'price' => $product->price,
                        'img' => $product->img,
                    ];
        }
        $_SESSION['cart.quanty'] = isset($_SESSION['cart.quanty']) ? $_SESSION['cart.quanty'] + $quanty : $quanty;
        
        $_SESSION['cart.summ'] = isset($_SESSION['cart.summ']) ? $_SESSION['cart.summ'] + $quanty * $product->price : $quanty * $product->price;
    }
}
