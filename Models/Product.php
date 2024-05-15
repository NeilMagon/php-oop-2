<?php
    class Product {
        private $id;
        private $name;
        private $price;
        private $imageUrl;
        private $category;
        private $productType;

        public function __construct($id, $name, $price, $imageUrl, $category, $productType) {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->imageUrl = $imageUrl;
            $this->category = $category;
            $this->productType = $productType;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getImageUrl() {
            return $this->imageUrl;
        }

        public function getCategory() {
            return $this->category;
        }

        public function getProductType() {
            return $this->productType;
        }
    }
?>

