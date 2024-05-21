<?php

interface OrderServiceInterface {
    public function createOrder(array $orderData): Order;
}