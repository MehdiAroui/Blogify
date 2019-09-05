<?php

namespace Blogify\Tests;

use Orchestra\Testbench\TestCase;
use Blogify\BlogifyServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogifyTestBase extends TestCase
{
    use RefreshDatabase;
    
    protected function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/../src/Database/factories');
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
        $config = $app->get('config');

        $config->set('database.default', 'testdb');

        $config->set('blogify.storage.database.connection', 'testdb');

        $config->set('database.connections.testdb', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        $app->when(DatabaseEntriesRepository::class)
            ->needs('$connection')
            ->give('testbench');
    }
}