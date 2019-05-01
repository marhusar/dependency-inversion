<?php

namespace App\Model\Contract;

interface User
{
    /**
     * @return string
     */
    public function email(): string;

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return array
     */
    public function toArray();
}