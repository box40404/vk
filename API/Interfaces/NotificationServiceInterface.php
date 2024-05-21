<?php

interface NotificationServiceInterface {
    public function sendShippingNotification(Order $order): bool;
}