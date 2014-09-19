<?php

namespace spec\Tasks\Entities;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Tasks\Entities\Task;
use Tasks\User;

class CommentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tasks\Entities\Comment');
    }

    function it_can_get_an_author(User $author)
    {
        $this->assignAuthor($author);

        $this->getAuthor()->shouldReturn($author);
    }

    function it_can_get_a_task(Task $task) {
        $this->assignTask($task);

        $this->getTask()->shouldReturn($task);
    }
}
