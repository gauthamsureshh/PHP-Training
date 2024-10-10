<?php
class House {
    private string $address = 'House Name, Address, Landmark, Pincode';
    public function address(): string{
        return $this->address;
    }
}
