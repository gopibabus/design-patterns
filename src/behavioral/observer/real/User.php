<?php

namespace DesignPatterns\behavioral\observer\real;

/**
 * Let's keep the User class trivial since it's not the focus of our example.
 */
class User
{
    public $attributes = [];

    public function update($data): void
    {
        $this->attributes = array_merge($this->attributes, $data);
    }
}
