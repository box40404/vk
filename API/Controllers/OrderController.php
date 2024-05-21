<?php


class OrderController {
    public OrderServiceInterface $orderService;
    public PaymentServiceInterface $paymentService;
    public InventoryServiceInterface $inventoryService;
    public NotificationServiceInterface $notificationService;


    public function __construct(
        OrderServiceInterface $orderService, 
        PaymentServiceInterface $paymentService, 
        InventoryServiceInterface $inventoryService, 
        NotificationServiceInterface $notificationService
    ) {
        $this->orderService = $orderService;
        $this->paymentService = $paymentService;
        $this->inventoryService = $inventoryService;
        $this->notificationService = $notificationService;
    }


    public function createOrderAction(array $request) {
        //
    }

    public function reduceProductStock(array $products) {
        //
    }

    public function processPayment(Order $order){
        //
    }

    public function sendNotification(Order $order){
        //
    }

}
