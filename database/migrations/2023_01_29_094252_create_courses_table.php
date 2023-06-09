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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->boolean('top')->default(1);
            $table->boolean('bottom')->default(1);

            $table->string('title')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description')->nullable()->default(null);
            $table->text('description_short')->nullable()->default(null);
            $table->text('detail')->nullable()->default(null);
            $table->text('content')->nullable()->default(null);

            $table->string('seo_h1')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->json('program')->nullable();
            $table->string('program_file')->nullable();

            $table->text('certificate_text')->nullable()->default(null);

            $table->boolean('published')->default(1);
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
        Schema::dropIfExists('courses');
    }
};
