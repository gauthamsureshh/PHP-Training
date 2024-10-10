<?php
    abstract class A {
        public string $name;
        public function payment($name) : void {
            $this->name =$name;
        }
        public function name(): string{
            return $this->name;
        }
    }

    class Product extends A {
        public function getPayment($name): void{
            $this->payment($name);
            echo $this->name();
        }


    }

    $buy = new Product();
    $buy->getpayment('calling function ');
