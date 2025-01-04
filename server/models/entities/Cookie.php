<?php 
class Cookie {
    private $name;
    private $value;
    private $expire;

    public function __construct($name, $value, $expire) {
        $this->name = $name;
        $this->value = $value;
        $this->expire = $expire;
    }

    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

    public function getExpire() {
        return $this->expire;
    }
    

}