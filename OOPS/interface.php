<?php
    interface PaymentInterface {
        public function pay();
    }

    interface LoginInterface {
        public function login();
    }

    Class Paypal implements PaymentInterface, LoginInterface {
        public function login() {}
        public function pay() {}
        public function paymentProcess(): void{
            $this->login();
            $this->pay();
            echo "Logged and payment done using PayPal method <br> ";
        }
    }

    class BankTransfer implements PaymentInterface, LoginInterface{
        public function login(){}
        public function pay(){}
        public function paymentProcess(): void{
            $this->login();
            $this->pay();
            echo "Logged and payment done using Bank Transfer method <br>";
        }
    }

    class Cash implements PaymentInterface {
        public function pay(){}
        public function paymentProcess(): void{
            $this->pay();
            echo "Cash Received <br>";
        }
    }

    class visa implements PaymentInterface {
        public function pay(){}
        public function paymentProcess(): void{
            $this->pay();
            echo "Payment Done using Visa <br>";
        }
    }

    class BuyProduct{
        public function payMethod(PaymentInterface $paymentType): void{
            $paymentType->paymentProcess();
        }
    }

    //Cash Purchase
    $paymentType = new Cash();
    $buy = new BuyProduct();
    $buy->payMethod($paymentType);

    //Visa Purchase
    $paymentType = new Visa();
    $buy = new BuyProduct();
    $buy->payMethod($paymentType);

    //BankTransfer Purchase
    $paymentType = new BankTransfer();
    $buy = new BuyProduct();
    $buy->payMethod($paymentType);

    //PayPal Purchase
    $paymentType = new Paypal();
    $buy = new BuyProduct();
    $buy->payMethod($paymentType);


