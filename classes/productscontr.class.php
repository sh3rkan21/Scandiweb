<?php

class ProductsContr extends products {
    
    public function addProduct($sku,$name,$price,$productType,$size=0,$height=0,$width=0,$length=0,$weight=0)
    {
        $this->setProduct($sku,$name,$price,$productType,$size,$height,$width,$length,$weight);
    }
}