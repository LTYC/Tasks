<?php

namespace Tasks\Entities;

use Tasks\User;

class Task
{
    protected $user;

    public function assignAuthor(User $author)
    {
        $this->user = $author;
    }

    public function getAuthor()
    {
        return $this->user;
    }
}
