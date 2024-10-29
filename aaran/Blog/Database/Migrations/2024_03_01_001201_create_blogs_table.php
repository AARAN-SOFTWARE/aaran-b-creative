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

        }
    }

    public function down(): void
    {

        Schema::dropIfExists('posts');
    }
};
