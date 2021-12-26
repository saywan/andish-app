<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart
{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function Add($item, $id)
    {
        $storeItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;

    }

    public function UpdateCart($item, $id, $number)
    {
        $storeItem = ['qty' => $item->qty + $number, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $storeItem = $this->items[$id];
            }
        }
        $storeItem['qty'];
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
