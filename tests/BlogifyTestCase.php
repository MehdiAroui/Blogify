<?php

namespace Blogify\Tests;

class BlogifyTestCase extends Orchestra\Testbench\TestCase
{
	
	protected function getPackageProviders($app)
	{
	    return ['Blogify\BlogifyServiceProvider'];
	}

}