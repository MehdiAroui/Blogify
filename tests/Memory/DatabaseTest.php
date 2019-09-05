<?php

namespace Blogify\Tests\Memory;

use Blogify\Post;
use Blogify\Tests\BlogifyTestBase;

class DatabaseTest extends BlogifyTestBase
{

	public function test_first()
	{
		$this->assertTrue(true);
	}

    public function test_post_assertion()
    {
        factory(Post::class)->create();

        $this->assertCount(1, Post::all());
	}
}