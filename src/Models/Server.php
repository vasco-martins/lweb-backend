<?php

namespace App\Models;

class Server
{

    public function __construct(
        public $model,
        public $ram,
        public $hdd,
        public $location,
        public $price
    ) {

        

    }
}
