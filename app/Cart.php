<?php
namespace App;

class Cart{
    public $items = null;
    public $totalQty = 0;
    public $totalAmount = 0;

    public function __contruct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalAmount = $oldCart->totalAmount;
        }
    }
    public function add($item , $id){
        $storedItem = ['qty' =>0 ,'amount'=> $item->amount, 'item'=>$item];
        if ($this->items) {
            if (array_key_exists($id , $this->items)) {
               $storedItem = $this->items['$id'];
            }
        }
        $storedItem['qty']++;
        $storedItem['amount']= $item->amount * $storedItem['qty'];
        $this->items['$id'] = $storedItem;
        $this->totalQty++;
        $this->totalAmount += $item->amount;
    }
}