<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->boolean('top')->default(true);
            $table->boolean('bottom')->default(true);

            $table->string('code')->nullable()->unique();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->text('description_short')->nullable();
            $table->text('content')->nullable()->default(null);

            $table->string('seo_h1')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->boolean('published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
