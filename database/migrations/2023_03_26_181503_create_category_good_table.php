<?php

use App\Models\Category;
use App\Models\Good;
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
        Schema::create('category_good', function (Blueprint $table) {
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Good::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_good');
    }
};
