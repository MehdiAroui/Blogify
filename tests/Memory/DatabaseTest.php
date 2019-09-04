<?php

namespace Blogify\Tests\Memory;

use Blogify\Post;
use Blogify\Tests\BlogifyTestBase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends BlogifyTestBase
{
    use RefreshDatabase;

	public function test_first()
	{
		$this->assertTrue(true);
	}

    public function test_post_assertion()
    {
        $post = fatory(Post::cless)->create();

        $this->assertCount(1, Post::all());
	}
}