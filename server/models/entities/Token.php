<?php 
namespace Models;
class Token {
    public $id;
    public $user_id;
    public $token;
    public $type;
    public $tokenExp;

    public function __construct($id, $user_id, $token, $type, $tokenExp) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->token = $token;
        $this->type = $type;
        $this->tokenExp = $tokenExp;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getToken() {
        return $this->token;
    }

    public function getType() {
        return $this->type;
    }
}