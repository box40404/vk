<?php

interface InventoryServiceInterface {
    public function checkStock(Product $product, int $quantity): bool;
    public function reduceStock(Product $product, int $quantity): bool;
}