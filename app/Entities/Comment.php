<?php

namespace Tasks\Entities;

use Tasks\User;

class Comment
{
    protected $task;
    protected $user;

    public function assignAuthor(User $user)
    {
        $this->user = $user;
    }

    public function getAuthor()
    {
        return $this->user;
    }

    public function assignTask(Task $task)
    {
        $this->task = $task;
    }

    public function getTask()
    {
        return $this->task;
    }
}
