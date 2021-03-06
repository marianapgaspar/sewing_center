<?php

/*
 * This file is part of the PHPFlasher package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

namespace Flasher\Prime\Stamp;

interface OrderableStampInterface
{
    /**
     * @param mixed $orderable
     *
     * @return int
     */
    public function compare($orderable);
}
