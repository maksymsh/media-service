<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Kalnoy\Nestedset\NestedSet;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->nullableMorphs('model');
            $table->boolean('root')->default(true);
            $table->unsignedBigInteger('parent_id')->nullable()->default(null);
            $table->unsignedBigInteger(NestedSet::LFT)->nullable();
            $table->unsignedBigInteger(NestedSet::RGT)->nullable();
            $table->string('path')->nullable();

            $table->unsignedBigInteger('layout_id')->nullable();

            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description')->nullable()->default(null);
            $table->text('description_short')->nullable()->default(null);

            $table->string('seo_h1')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->integer('position')->default(0);
            $table->boolean('published')->default(true);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
