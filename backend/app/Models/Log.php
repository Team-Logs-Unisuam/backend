<?php

namespace App\Models;

class Log
{
    public $action;
    public $createdAt;
    public $response;

    public function __construct($action, $createdAt, $response)
    {
        $this->action = $action;
        $this->createdAt = $createdAt;
        $this->response = $response;
    }
}
