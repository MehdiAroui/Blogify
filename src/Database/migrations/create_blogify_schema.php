<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogifySchema extends Migration
{
    /**
     * The database schema.
     *
     * @var Schema
     */
    protected $schema;

    /**
     * Create a new migration instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->schema = Schema::connection(
            config('blogify.storage.database.connection')
        );
    }

    public function up()
    {
        $this->schema->create('blogify_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('slug');
            $table->longText('content');
            $table->text('excerpt');
            $table->string('status');
            $table->integer('like_count');
            $table->boolean('enable_comment')->default(true);
            $table->integer('comment_count');
            $table->date('publish_date');
        });

        $this->schema->create('blogify_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label');
            $table->integer('parent_id')->unsaigned()->nullable();
        });

        $this->schema->create('blogify_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->text('content');
            $table->boolean('active')->default(true);
            $table->integer('post_id')->unsaigned();
        });
    }

    public function dowm()
    {
        $this->schema->dropIfExists('blogify_posts');
    }
}
