<?php

namespace App\Contracts;

interface PlatformInterface
{
    /**
     * fetch products from vendors
     *
     */
    public function products();
}
