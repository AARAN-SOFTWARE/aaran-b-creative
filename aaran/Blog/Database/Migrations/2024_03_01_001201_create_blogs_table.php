<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Aaran\Aadmin\Src\Customise::hasBlog()) {

            Schema::create('blog_posts', function (Blueprint $table) {
                $table->id();
                $table->string('vname');
                $table->longText('body');
                $table->longText('image')->nullable();
                $table->foreignId('blogcategory_id')->references('id')->on('commons');
                $table->foreignId('blogtag_id')->references('id')->on('blog_tags');
                $table->foreignId('user_id')->references('id')->on('users');
                $table->boolean('visibility')->nullable();
                $table->decimal('active_id')->nullable();
//                $table->foreignId('company_id')->references('id')->on('companies');
                $table->timestamps();
            });

            Schema::create('comments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->references('id')->on('users');
                $table->foreignId('blog_posts_id')->references('id')->on('blog_posts');
                $table->text('body');
                $table->timestamps();
            });

            Schema::create('likes', function (Blueprint $table) {
                $table->id();
                $table->foreignId('blog_posts_id')->references('id')->on('blog_posts');
                $table->tinyInteger('like')->default(0);
                $table->timestamps();
            });

        }
    }

    public function down(): void
    {
        Schema::dropIfExists('likes');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('posts');
    }
};
