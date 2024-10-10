<?php
    $obj = new class {
        public function hello(): void{
            echo 'hello world';
        }
    };

    $obj->hello();