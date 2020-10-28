<?php

    class Movie extends Product {
        protected $product_title;
        protected $product_price;
        protected $product_stock;
        protected $product_image;

        public function setAttributes($title, $price, $stock, $image) {
            $this->product_title = $title;
            $this->product_price = $price;
            $this->product_stock = $stock;
            $this->product_image = $image;
        }
    }    
?>