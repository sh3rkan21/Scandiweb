<?php

class ProductsContr extends products {

    private $sku;
    private $name;
    private $price;
    private $productType;
    private $size = 0;
    private $height = 0;
    private $width = 0;
    private $length = 0;
    private $weight = 0;

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param mixed $productType
     */
    public function setProductType($productType): void
    {
        $this->productType = $productType;
    }

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

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     */
    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }



    public function addProduct($sku, $name, $price, $productType, $size , $width, $length, $weight)
    {
        $this->sku = self::setSku($sku);
        $this->name = self::setName($name);
        $this->price = self::setPrice($price);
        $this->productType = self::setProductType($productType);
        $this->size = self::setSize($size);
        $this->width = self::setWidth($width);
        $this->length = self::setLength($length);
        $this->weight = self::setWeight($weight);

        $this->setProduct($this->getSku(),$this->getName(),$this->getPrice(),$this->getProductType(),$this->getSize(),$this->getHeight(),$this->getWidth(),$this->getLength(),$this->getWidth());
    }

}