<?php

namespace App\Repositories;

class PostsRepository
{
    protected $key;

    function __construct($key)
    {
        $this->key = $key;
    }
}

