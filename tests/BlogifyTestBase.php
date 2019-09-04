<?php

namespace Blogify\Tests;

use Orchestra\Testbench\TestCase;
use Blogify\BlogifyServiceProvider;

class BlogifyTestBase extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'../src/Database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [
            BlogifyServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            BlogifyServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetup($app)
    {
    	$app['config']->set('database.default', 'testdb');
    	$app['config']->set('database.connections.testdb', [
    		'driver' => 'sqlite',
    		'database' => ':memory:',
    	]);
    }
}