<?php

class Order {
    public int $id;
    public int $customerId;
    public array $items;
    public float $totalPrice;
    public string $status;
}