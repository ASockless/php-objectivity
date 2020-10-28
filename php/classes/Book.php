<?php

include("Product.php");

class Book extends Product
{
    protected $product_title;
    protected $product_price;
    protected $product_stock;
    protected $product_image;

    protected $product_author;
    protected $product_release_year;

    public function setAttributes($title, $price, $stock, $author, $release_year, $cover) {
        $this->product_title = $title;
        $this->product_price = $price;
        $this->product_stock = $stock;
        $this->product_author = $author;
        $this->product_release_year = $release_year;
        $this->product_image = $cover;
    }

    public function printProduct() {
        echo "<div class='product_panel'>";
        echo "<img src=".$this->img_folder . $this->product_image ." class='product-image'>";
        echo "<h2>". $this->product_title . " - ". $this->product_author ."</h2>";
        echo "<h3>Amount in Stock: ". $this->product_stock . "</h3>";
        echo "</div>";
    }
}


?>