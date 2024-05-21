<?php

interface InventoryServiceInterface {
    public function checkStock(Product $product): bool;
    public function reduceStock(Product $product): bool;
}