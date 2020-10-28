<?php

abstract class Product {
    protected $product_title;
    protected $product_price;
    protected $product_stock;
    protected $product_image;

    protected $img_folder = "images/covers/";

    public function setAttributes($title, $price, $stock, $image) {
        $this->product_title = $title;
        $this->product_price = $price;
        $this->product_stock = $stock;
    }

    public function getTitle() {
        return $this->product_title;
    }

    public function getPrice() {
        return $this->product_price;
    }

    public function getStock() {
        return $this->product_stock;
    }

    public function printProduct() {
        echo "<div class='product_panel'>";
        echo "<img src=". $this->img_folder . $this->product_image ." class='product-image'>";
        echo "<h2>". $this->product_title ."</h2>";
        echo "<h3>Amount in Stock: ". $this->product_stock . "</h3>";
        echo "</div>";
    }
}
?>