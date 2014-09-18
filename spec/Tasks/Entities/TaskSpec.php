<?php

namespace spec\Tasks\Entities;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Tasks\User;

class TaskSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tasks\Entities\Task');
    }

    function it_can_get_an_author(User $author)
    {
        $this->assignAuthor($author);

        $this->getAuthor()->shouldReturn($author);
    }
}
