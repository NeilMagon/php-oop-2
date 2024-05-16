<?php
trait HasDiscount {
    private $discount = 0;

    public function setDiscount($discount) {
        $this->discount = $discount;
    }

    public function getDiscount() {
        return $this->discount;
    }
}
?>
