<?php

class ProductsContr extends products {

    public $sku;
    public $name;
    public $price;
    public $productType;
    public $size = 0;
    public $height = 0;
    public $width = 0;
    public $length = 0;
    public $weight = 0;

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }





    public function addProduct($sku,$name,$price,$productType,$size =0,$height=0,$width=0,$length=0,$weight=0)
    {
        $this->setProduct($sku,$name,$price,$productType,$size,$height,$width,$length,$weight);
    }

}