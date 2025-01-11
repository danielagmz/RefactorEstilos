<?php 

namespace Models\entities;

class Request
{
    public $params;
    public $query;

    public function __construct($params = [], $query = [])
    {
        $this->params = $params;
        $this->query = $query;
    }

    public function getParams() {
        return $this->params;
    }
}