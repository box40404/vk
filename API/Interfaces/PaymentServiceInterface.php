<?php

interface PaymentServiceInterface {
    public function processPayment(Order $order): bool;
}